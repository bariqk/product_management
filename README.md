Aplikasi Manajemen Produk dengan CodeIgniter 4
Aplikasi ini adalah sistem manajemen produk sederhana yang dibangun menggunakan framework CodeIgniter 4. Aplikasi ini mencakup fitur-fitur seperti CRUD (Create, Read, Update, Delete) untuk produk, manajemen properti dinamis, validasi form, session management, dan file upload.

Fitur Utama
Manajemen Produk:

Tambah, lihat, edit, dan hapus produk.

Kategori produk dengan inheritance OOP.

Properti dinamis untuk produk.

Autentikasi dan Session Management:

Sistem login untuk administrator.

Session management untuk mengontrol akses.

Upload Gambar Produk:

Fitur upload gambar produk dengan validasi tipe file (JPG, PNG).

Validasi Form dan Error Handling:

Validasi input form sebelum disimpan ke database.

Penanganan error saat berinteraksi dengan database.

Routing dan Struktur Proyek:

Routing yang terorganisir.

Struktur folder yang konsisten.

Caching dengan Redis:

Integrasi Redis untuk caching data produk.

Dokumentasi dan Komentar Kode:

Komentar di setiap kelas, fungsi, dan bagian penting dari kode.

File README.md untuk panduan instalasi dan penggunaan.

Persyaratan Sistem
PHP versi 7.4 atau lebih baru.

Composer (untuk manajemen dependensi).

MySQL atau MariaDB.

Redis (opsional, untuk caching).

Git (opsional, untuk mengunduh proyek).

Instalasi
Clone Repositori:

bash
Copy
git clone https://github.com/username/product-management.git
cd product-management
Install Dependensi:
Jalankan perintah berikut untuk menginstal dependensi yang diperlukan:

bash
Copy
composer install
Setup Database:

Buat database baru di MySQL (misalnya, product_management).

Konfigurasi koneksi database di file .env:

env
Copy
database.default.hostname = localhost
database.default.database = product_management
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
Migrasi Database:

Jalankan perintah berikut untuk membuat tabel di database:

sql
Copy
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    category VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL
);

CREATE TABLE product_properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    property_name VARCHAR(255),
    property_value TEXT,
    FOREIGN KEY (product_id) REFERENCES products(id)
);
Setup Redis (Opsional):

Jika Anda ingin menggunakan Redis untuk caching, pastikan Redis terinstal dan konfigurasikan di file .env:

env
Copy
redis.default.host = 127.0.0.1
redis.default.password = 
redis.default.port = 6379
redis.default.timeout = 0
Jalankan Aplikasi:

Jalankan server development dengan perintah:

bash
Copy
php spark serve
Buka browser dan akses http://localhost:8080.

Struktur Folder
Copy
product-management/
├── app/
│   ├── Config/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   └── ...
├── public/
├── vendor/
├── writable/
└── .env
Cara Menggunakan
Menambah Produk:

Akses /products/create untuk menambahkan produk baru.

Isi formulir dan upload gambar produk.

Melihat Daftar Produk:

Akses /products untuk melihat daftar produk yang ada.

Mengedit Produk:

Akses /products/edit/{id} untuk mengedit produk.

Menghapus Produk:

Akses /products/delete/{id} untuk menghapus produk.

Menambahkan Properti Dinamis:

Akses /products/edit/{id} dan gunakan formulir tambah properti dinamis.
