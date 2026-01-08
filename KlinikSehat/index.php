<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Klinik Sehat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2><b><center>Form Klinik Sehat<center></b></h2>

<form method="post" class="form-grid">
    <label>ID:</label>
    <input type="int" name="id" required>

    <label>Nama Pasien:</label>
    <input type="text" name="nama_pasien" required>

    <label>Umur:</label>
    <input type="text" name="umur" required>

    <label>Keluhan:</label>
    <input type="text" name="keluhan" required>

    <div></div>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
mysqli_query($koneksi,
"INSERT INTO pasien VALUES(NULL,'$_POST[nama_pasien]','$_POST[umur]','$_POST[keluhan]')");
}
?>

<h3><b><center>Data Pasien</center></b></h3>
<table>
<tr><th>ID</th><th>Nama Pasien</th><th>Umur</th><th>Keluhan</th></tr>
<?php
$data=mysqli_query($koneksi,"SELECT * FROM pasien");
while($d=mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $d['ID']?></td>
<td><?= $d['Nama Pasien']?></td>
<td><?= $d['Umur']?></td>
<td><?= $d['Keluhan']?></td>
</tr>
<?php } ?>
</table>
</div>

    <footer class="footer">
        © 2025 | Yanuar Andina Rahayu - 2305101065
    </footer>

</body>
</html>
