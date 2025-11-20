# Belajar Laravel

Aplikasi CRUD manajemen produk dan kategori menggunakan Laravel 12.

## 🚀 Fitur

-   CRUD Produk (kode, nama, harga, deskripsi, stok, kategori)
-   CRUD Kategori dengan Resource Controller
-   Relasi produk-kategori (foreign key)
-   Halaman: Beranda, About, Contact
-   UI Bootstrap 5 dengan gradient navbar

## 🛠️ Tech Stack

-   Laravel 12 (PHP 8.2+)
-   MySQL
-   Bootstrap 5.3.8
-   Blade Templates

## 📦 Instalasi

```bash
# Clone & install
git clone https://github.com/danielsatria321/project_laravel.git
cd project_laravel
composer install
npm install

# Setup
cp .env.example .env
php artisan key:generate

# Database (edit .env sesuai konfigurasi)
php artisan migrate
php artisan db:seed --class=kategoriSeeder
php artisan db:seed --class=produkSeeder

# Run
npm run dev
php artisan serve
```

Akses: `http://localhost:8000`

## 🗄️ Database

**tb_produk**: id_produk, kode_produk, nama_produk, harga, deskripsi_produk, stok, kategori_id

**tb_kategori**: id_kategori, nama_kategori, deskripsi

## 🔗 Routes

```
/                  → Beranda
/about             → About
/contact           → Contact
/product           → CRUD Produk
/kategori          → CRUD Kategori (Resource)
```
