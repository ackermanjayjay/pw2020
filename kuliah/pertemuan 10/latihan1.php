<?php
//Koneksi Ke database serta pilih Dbnya
$conn = mysqli_connect('localhost', 'root', '', 'pw_043040023');


//Query isi Tabel Mahasiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//Ubah data ke dalam array

//$row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array assosiatif

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}



//tampung ke variabel mahasiswa

$mahasiswa = $rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
</body>
<h3>Daftar Mahasiswa</h3>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Aksi</th>
  </tr>
  <?php $i = 1;
  foreach ($mahasiswa as $m) : ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
      <td><?= $m['nim']; ?></td>
      <td><?= $m['nama']; ?></td>
      <td><?= $m['email']; ?></td>
      <td><?= $m['jurusan']; ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

</html>