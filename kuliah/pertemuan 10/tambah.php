<?php
require 'functions.php';

// Cek apakah sudah ditekan

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<scipt>
    alert('data berhasil ditambahkan);
    document.location.href = 'latihan3.php'
    </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <h3>Tambah Data Mahasiswa</h3>
  <br>
  <div class="container">
    <button type="button" class="btn btn-primary"><a href="latihan3.php">
        <p class="text-white">Kembali</p>
      </a></button>
    </br>
  </div>
  <form action="" method="POST">
    <div class="container">
      <div class="form-group">
        <label for="name">Nama</label>
        <input type="teks" class="form-control" name="nama" aria-describedby="emailHelp" autofocus required>
        <small name="username" class="form-text text-muted">We'll never share your name with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="teks" class="form-control" name="nim" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="teks" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label for="teks">Jurusan</label>
        <input type="teks" class="form-control" name="jurusan" required>
      </div>
      <label for="exampleFormControlFile1"> Gambar</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
    </div>
    <br>
    </div>
    <div class="container">
      <button type="submit" class="btn btn-primary">Submit</button>
      </br>
    </div>
    </div>
    </div>
  </form>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>