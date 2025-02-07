<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="/products/update/<?= $product['id'] ?>" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" value="<?= $product['name'] ?>" required><br>
        <label for="price">Harga:</label>
        <input type="number" name="price" value="<?= $product['price'] ?>" required><br>
        <label for="category">Kategori:</label>
        <input type="text" name="category" value="<?= $product['category'] ?>" required><br>
        <button type="submit">Update</button>
    </form>

    <h2>Tambah Properti Dinamis</h2>
    <form action="/products/add-property/<?= $product['id'] ?>" method="post">
        <label for="property_name">Nama Properti:</label>
        <input type="text" name="property_name" required><br>
        <label for="property_value">Nilai Properti:</label>
        <input type="text" name="property_value" required><br>
        <button type="submit">Tambah Properti</button>
    </form>

    <h2>Daftar Properti</h2>
    <ul>
        <?php foreach ($properties as $property): ?>
        <li>
            <?= $property['property_name'] ?>: <?= $property['property_value'] ?>
            <a href="/products/delete-property/<?= $property['id'] ?>">Hapus</a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>