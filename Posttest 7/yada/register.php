<?php
require "koneksi.php";

if (isset($_POST["register"])) {
  $username = strtolower($_POST["username"]);
  $pass = $_POST["password"];
  $konfirmasi = $_POST["konfirmasi"];
  $role = 'user';

  // Ubah true disini
  if ($pass === $konfirmasi) {
    // Ubah pass dan result disini
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username' ");

    // Ubah true disini
    if (mysqli_fetch_assoc($result)) {
      echo "
          <script>
            alert('Username telah digunakan');
            document.location.href = 'register.php';
          </script>
        ";
    } else {
      // Ubah sql dan result disini
      $sql = "INSERT INTO users VALUES ('', '$role', '$username', '$pass')";
      $result = mysqli_query($koneksi, $sql);

      if (mysqli_affected_rows($koneksi) > 0) {
        echo "
          <script>
            alert('Registrasi berhasil');
            document.location.href = 'login.php';
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Registrasi gagal');
            document.location.href = 'register.php';
          </script>
        ";
      }
    }
  } else {
    echo "
        <script>
          alert('Password tidak sama');
          document.location.href = 'register.php';
        </script>
      ";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="register-login.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="" method="POST">
        <h3>Register</h3>
        <div class="inputBox">
          <label for="">Username</label>
          <input type="text" name="username" placeholder="username" required>
        </div>
        <div class="inputBox">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="password" required>
        </div>
        <div class="inputBox">
          <label for="">Konfirmasi Password</label>
          <input type="password" name="konfirmasi" placeholder="password" required>
        </div>
        <input type="submit" value="Register" name="register">
        <a href="login.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>