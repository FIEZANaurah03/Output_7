<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_049");
if (isset($_POST['submit'])) {
    $nama = $_POST['nama_naurah'];
    $alamat = $_POST['alamat_naurah'];
    $sql = "UPDATE tbl_naurah SET id_naurah=$id_naurah,nama_naurah='$nama',alamat_naurah='$alamat_naurah' WHERE id_naurah=$id_naurah";
    $hasil = mysqli_query($koneksi, $sql);
    header("location: data_aku.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

    <form action="" method="POST">
        <input type="hidden" name="id_naurah" value="<?php echo $_GET['id']; ?>">
        Nama Mahasiswa : <input type="text" name="nama_naurah" required><br>
        Alamat Mahasiswa : <input type="text" name="alamat_naurah" required><br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>