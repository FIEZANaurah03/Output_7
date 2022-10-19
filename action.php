<?php 
$koneksi = mysqli_connect("localhost", "root", "", "db_049");



$nama = $_POST['nama_naurah'];
$alamat = $_POST['alamat_naurah'];

$sql = "INSERT INTO tbl_naurah VALUES (NULL,'$nama','$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Perintah tambah data Warga Desa Panglipuran gagal";
} else{
    echo "Perintah tambah data Warga Desa Panglipuran berhasil<br>";
    echo "<a href='data_mhs.php'>Show data</a>";
}
