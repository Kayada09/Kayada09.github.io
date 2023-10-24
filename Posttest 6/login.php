<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $username = $_POST["username"];
    $no_hp = $_POST["no_hp"];
    $password = $_POST["password"];

    // Lakukan validasi data jika diperlukan
    // Contoh validasi sederhana untuk nomor handphone (minimal 12 digit)
    if (strlen($no_hp) < 12) {
        echo "Nomor Handphone harus memiliki minimal 10 digit.";
    } else {
       
        // Contoh: Menampilkan data yang telah diinputkan
        echo "Terima kasih telah login ngab, $username";
    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html">Kembali</a>
</body>
</html>