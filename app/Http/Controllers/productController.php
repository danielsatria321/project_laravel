<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(Request $request){
        $datatoko=[
            'nama_toko'=>'Makmur Jaya Abadi',
            'Alamat'=>'Jl. Merdeka No. 123',
            'type'=>'Toko Sembako'
        ];
        $search = $request->keyword;
        $produk=produk::when($search,function($query,$search){
            return $query->where('nama_produk','like',"%{$search}%");
        })->join('tb_kategori','tb_produk.kategori_id','=','tb_kategori.id_kategori')
        ->get();
        // $queryBuilder = DB::table('tb_produk')->get();
        
        
        return view('pages.produk.pshow',['data_toko'=>$datatoko,'data_produk'=>$produk]);
    }
    public function create(){
        $data_kategori = Kategori::get();
        return view('pages.produk.addProduct',['data_kategori'=>$data_kategori]);
    }
    public function store(Request $request){
        $request->validate([
            'nama_produk'=>'required|min:8|max:12',
            'harga'=>'required|integer',
            'deskripsi_produk'=>'required',
        ],[
            'nama_produk.min'=>'Nama produk minimal 8 karakter',
            'nama_produk.max'=>'Nama produk maksimal 12 karakter',
            'nama_produk.required'=> 'nama tolong diisi',
            'harga.required'=> 'nama tolong diisi',
            'deskripsi_produk.required'=> 'deskripsi tolong diisi',
        ]);
     
        produk::create([
            'kode_produk'=>'KDP'.rand(1000,9999),
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'deskripsi_produk'=>$request->deskripsi_produk,
            'stok'=>$request->stok,
            'kategori_id'=>$request->kategori_id,
            
        ]);
        return redirect('/product')->with('success','sucessbro mantapp');
   
}
public function showDetail($id){
    $produk = produk::findOrFail($id);
    return view('pages.produk.detailProduk',['produk'=>$produk]);
}
public function updateData($id){
    $dataProduk = produk::findOrFail($id);
    return view('pages.produk.updateData',['dataProduk'=>$dataProduk,'data_kategori'=>Kategori::get()]);
}
public function updateOperation($id, Request $request){
        $request->validate([
            'nama_produk'=>'required|min:8|max:12',
            'harga'=>'required|integer',
            'deskripsi'=>'required',
        ],[
            'nama_produk.min'=>'Nama produk minimal 8 karakter',
            'nama_produk.max'=>'Nama produk maksimal 12 karakter',
            'nama_produk.required'=> 'nama tolong diisi',
            'harga.required'=> 'nama tolong diisi',
            'deskripsi.required'=> 'nama tolong diisi',
        ]);
        produk::where('id_produk',$id)->update([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'deskripsi_produk'=>$request->deskripsi,
            'stok'=>$request->stok,
            'kategori_id'=>$request->kategori_id,
        ]);
        return redirect('/product')->with('success','Data Berhasil Di Update');

}public function deleteData($id){
    produk::findOrFail( $id)->delete();
    return redirect('/product')->with('success','Data Berhasil Di Hapus');
}


}