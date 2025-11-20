<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request()->caribos;
        $kategori = Kategori::when($search,function($query,$search){
            return $query->where('nama_kategori','like',"%{$search}%");
        })->get();

        if($search){
            session()->now('success',"Data $search ditemukan");
        }
        return view('pages.kategori.show',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kategori::create([
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi'=>$request->deskripsi,
        ]);
        return redirect('/kategori')->with('success','data nerhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('pages.kategori.edit', compact('kategori'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Kategori::where('id_kategori',$id)->update([
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi'=>$request->deskripsi,
        ]);
        return redirect('/kategori')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::findOrFail($id)->delete();
        return redirect('/kategori')->with('success','Data Berhasil di Hapus!');
    }
}
