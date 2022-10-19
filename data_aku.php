<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_049");
$sql = "SELECT*FROM tbl_naurah";
$hasil = mysqli_query($koneksi, $sql);

?>
<h3>
    Nama :Fieza Naurah Aprilia <br>
    NIM: 210411100049 <br>
    Kelas : Pengembangan Aplikasi Web (C)<br>
</h3>

<hr>
<br><br>
<center>
    <h1>Data Warga Desa Panglipuran</h1>
    <a href="form.php">Tambah</a>
    <table border="1" width="80%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($hasil)) {
        ?>
            <tr>
                <td><?= $row['id_naurah'] ?></td>
                <td><?= $row['nama_naurah'] ?></td>
                <td><?= $row['alamat_naurah'] ?></td>
                <td>
                    <a href="delete.php?id=<?= $row['id_naurah'] ?>">Delete</a>|
                    <a href="edit.php?id=<?= $row['id_naurah'] ?>">Edit</a>
                </td>
            </tr>
</center>
<?php
        }
?>
</table>