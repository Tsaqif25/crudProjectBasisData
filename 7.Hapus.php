 <?php

include "1.koneksi database.php" ;
$nimMahasiswa = "";
$query = " DELETE FROM mahasiswa1 WHERE nimMahasiswa = '$nimMahasiswa';" ;
$nimMahasiswa = $_GET['hapus'];
$hapus = mysqli_query($conn,$query );
?> 