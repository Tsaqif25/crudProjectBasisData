<?php
include "0.koneksi database.php" ;
$query = "DELETE FROM mahasiswa1 WHERE nimMahasiswa  = '$nimMahasiswa' ";
$nimMahasiswa = $_GET['hapus'];
$hapus = mysqli_query($conn,$query );
?>