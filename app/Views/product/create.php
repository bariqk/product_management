<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="/products/store" method="post" enctype="multipart/form-data">
        <label for="name">Nama:</label>
        <input type="text" name="name" required><br>
        <label for="price">Harga:</label>
        <input type="number" name="price" required><br>
        <label for="category">Kategori:</label>
        <input type="text" name="category" required><br>
        <label for="image">Gambar:</label>
        <input type="file" name="image" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>