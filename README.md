# Belajar Laravel

Aplikasi web CRUD sederhana menggunakan Laravel 12 untuk manajemen produk dan kategori.

## Tentang Proyek

Proyek ini adalah aplikasi pembelajaran Laravel yang mencakup operasi CRUD (Create, Read, Update, Delete) untuk manajemen produk dan kategori. Aplikasi ini dibangun untuk memahami konsep dasar Laravel seperti routing, controllers, models, migrations, dan Eloquent ORM.

## Fitur

-   **Manajemen Produk**
    -   Tambah produk baru
    -   Lihat daftar produk
    -   Update data produk
    -   Hapus produk
    -   Detail produk
-   **Manajemen Kategori**

    -   CRUD kategori dengan resource controller
    -   Relasi dengan produk

-   **Halaman Statis**
    -   Halaman beranda
    -   Halaman about
    -   Halaman contact

## Teknologi yang Digunakan

-   **Framework**: Laravel 12
-   **PHP**: ^8.2
-   **Database**: MySQL/SQLite
-   **Frontend**: Blade Templates, Vite
-   **Testing**: PHPUnit
    Struktur Database

### Tabel: `tb_produk`

-   `id_produk` (Primary Key)
-   `nama_produk` (varchar 150)
-   `harga` (integer)
-   `deskripsi` (text)
-   `kategori_id` (integer)
-   `timestamps`

### Tabel: `tb_kategori`

-   `id_kategori` (Primary Key)
-   `nama_kategori` (varchar 100)
-   `deskripsi` (text 100)
-   `timestamps`

## Instalasi

### Prasyarat

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   MySQL/SQLite

### Langkah-langkah Instalasi

1. **Clone repository**

    ```bash
    git clone https://github.com/danielsatria321/belajar_laravel.git
    cd belajar_laravel
    ```

2. **Install dependencies**

    ```bash
    composer install
    npm install
    ```

3. **Konfigurasi environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Setup database**

    - Buat database baru
    - Konfigurasi database di file `.env`

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=username
    DB_PASSWORD=password
    ```

5. **Jalankan migrasi**

    ```bash
    php artisan migrate
    ```

6. **Jalankan seeder (opsional)**

    ```bash
    php artisan db:seed --class=kategoriSeeder
    php artisan db:seed --class=produkSeeder
    ```

7. **Build assets**

    ```bash
    npm run build
    # atau untuk development
    npm run dev
    ```

8. **Jalankan aplikasi**

    ```bash
    php artisan serve
    ```

    Aplikasi akan berjalan di `http://localhost:8000`

## 📝 Routes

### Web Routes

```
GET  /                          - Halaman utama
GET  /about                     - Halaman about
GET  /beranda                   - Halaman beranda
GET  /contact                   - Halaman contact

GET  /product                   - Daftar produk
GET  /product/create            - Form tambah produk
POST /product                   - Simpan produk baru
GET  /product/{id}              - Detail produk
GET  /product/{id}/updateData   - Form edit produk
PUT  /product/{id}              - Update produk
DELETE /product/{id}            - Hapus produk

Resource /kategori              - CRUD kategori (7 routes)
```
