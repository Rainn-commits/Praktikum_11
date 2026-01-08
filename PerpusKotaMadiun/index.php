<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan Kota Madiun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Form Anggota Perpustakaan</h2>

        <form method="post" class="form-grid">
            <label>Nama</label>
            <input type="text" name="nama" required>

            <label>Alamat</label>
            <input type="text" name="alamat" required>

            <label>No HP</label>
            <input type="text" name="no_hp" required>

            <div></div>
            <button type="submit" name="simpan">Simpan</button>
        </form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($koneksi,
    "INSERT INTO anggota VALUES('$_POST[nama]','$_POST[alamat]','$_POST[no_hp]')");
}
?>

<h3>Data Anggota</h3>
<table>
<tr><th>Nama</th><th>Alamat</th><th>No HP</th></tr>
<?php
$data = mysqli_query($koneksi,"SELECT * FROM anggota");
while($d=mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $d['Nama']?></td>
<td><?= $d['Alamat']?></td>
<td><?= $d['No HP']?></td>
</tr>
<?php } ?>
</table>
</div>

    <footer class="footer">
        © 2025 | Yanuar Andina Rahayu - 2305101065
    </footer>

</body>
</html>
