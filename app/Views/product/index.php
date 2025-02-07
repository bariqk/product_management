<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="/products/create">Tambah Produk</a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['category'] ?></td>
            <td><img src="/uploads/<?= $product['image'] ?>" width="100"></td>
            <td>
                <a href="/products/edit/<?= $product['id'] ?>">Edit</a>
                <a href="/products/delete/<?= $product['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>