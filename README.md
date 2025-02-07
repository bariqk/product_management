# Aplikasi Manajemen Produk dengan CodeIgniter 4

Aplikasi ini adalah sistem manajemen produk sederhana yang dibangun menggunakan framework CodeIgniter 4. Aplikasi ini mencakup fitur CRUD (Create, Read, Update, Delete) untuk produk, manajemen properti dinamis, validasi form, dan file upload.

## Fitur Utama
- **Manajemen Produk**: Tambah, lihat, edit, dan hapus produk.
- **Properti Dinamis**: Tambah properti dinamis untuk setiap produk.
- **Upload Gambar**: Unggah gambar produk dengan validasi tipe file.
- **Validasi Form**: Validasi input sebelum disimpan ke database.

## Persyaratan Sistem
- PHP versi 7.4 atau lebih baru.
- Composer (untuk manajemen dependensi).
- MySQL atau MariaDB.
- Redis (opsional, untuk caching).

## Instalasi
### Clone Repositori:
```bash
git clone https://github.com/username/product-management.git
cd product-management
```

### Install Dependensi:
```bash
composer install
```

### Setup Database:
1. Buat database baru di MySQL (misalnya, `product_management`).
2. Konfigurasi koneksi database di file `.env`:

```env
database.default.hostname = localhost
database.default.database = product_management
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

### Migrasi Database:
Jalankan perintah berikut untuk membuat tabel di database:

```sql
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
```

### Jalankan Aplikasi:
```bash
php spark serve
```
Buka browser dan akses `http://localhost:8080`.

## Cara Menggunakan
### Menambah Produk:
- Akses `/products/create` untuk menambahkan produk baru.
- Isi formulir dan upload gambar produk.

### Melihat Daftar Produk:
- Akses `/products` untuk melihat daftar produk yang ada.

### Mengedit Produk:
- Akses `/products/edit/{id}` untuk mengedit produk.

### Menghapus Produk:
- Akses `/products/delete/{id}` untuk menghapus produk.

### Menambahkan Properti Dinamis:
- Akses `/products/edit/{id}` dan gunakan formulir tambah properti dinamis.

## Dependensi
- **CodeIgniter 4**: Framework PHP yang digunakan.
- **PDO/MySQLi**: Untuk interaksi dengan database.
- **Redis**: Untuk caching (opsional).
