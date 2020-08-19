<?php

require 'functions.php';
$id = $_GET['id'];
$m = query("SELECT *FROM mahasiswa WHERE id = $id");

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Detail Mahasiswa</title>
</head>

<body>
  <h1>Detail Mahasiswa</h1>

  <div class="container">
    <ul>
      <li><img src="img/<?= $m['gambar']; ?>" width="200">"</li>
      <li>NIM : <?= $m['nim']; ?></li>
      <li>Nama : <?= $m['nama']; ?></li>
      <li>Email :<?= $m['email']; ?> </li>
      <li>Jurusan : <?= $m['jurusan']; ?></li>
      <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
      <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
    </ul>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>