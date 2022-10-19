<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_049");
$nama = $_POST['nama_naurah'];
$alamat = $_POST['alamat_naurah'];
$sql = "insert into tbl_naurah value(null,'$nama','$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) {
    header("location:data_aku.php");
}
