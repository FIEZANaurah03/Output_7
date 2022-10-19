<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_049");
$id=$_GET['id'];
$hasil=mysqli_query($koneksi,"DELETE FROM tbl_naurah WHERE id_naurah=$id");
header("location: data_aku.php");
