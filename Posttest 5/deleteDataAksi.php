<?php
  require "koneksi.php";

  $id = $_GET['id'];
  $sql = "DELETE FROM tb_vape WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);

  if ($result) {
    echo "
        <script>
          alert('Data berhasil dihapus');
          document.location.href = 'test.php';
        </script>
      ";
  } else {
    echo "
        <script>
          alert('Data gagal dihapus');
          document.location.href = 'test.php';
        </script>
      ";
  }
?>