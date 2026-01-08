<!DOCTYPE html>
<html>
<head>
    <title>Membuat Database dan Menampilkan data dari database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="judul">
    <h1>Membuat Koneksi Dengan PHP dan MySQL</h1>
    <h2>Menampilkan Data dari Database</h2>
    <h3>www.unipma.ac.id</h3>
</div>

<br/>

<br>
<h3><center>Data Mahasiswa<center></h3>
<table border="1" class="table">
<tr>
    <th>NPM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Kelas</th>
</tr>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?php echo $data['npm']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['kelas']; ?></td>
</tr>
<?php } ?>

</table>

<footer class="footer">
    <p>© 2025 | Yanuar Andina Rahayu - 2305101065</p>
</footer>

</body>
</html>