<?php
  require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="addDataAksi.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Data Vape</h3>
        <div class="inputBox">
          <label for="">Nama Barang</label>
          <input type="text" name="nama" placeholder="koil" required>
        </div>
        <div class="inputBox">
          <label for="">Harga</label>
          <input type="number" name="harga" placeholder="100000" required>
        </div>
        <div class="inputBox">
          <label for="">Stock</label>
          <input type="number" name="stock" placeholder="10" required>
        </div>
        <div class="inputBox">
          <label for="">Foto stok</label>
          <input type="file" name="foto"  required>
        </div>
        <input type="submit" value="Tambah stok" name="tambah">
        <a href="test.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>