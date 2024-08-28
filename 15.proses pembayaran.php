<?php

// Membatasi Halaman Sebelum Login
// if (!isset($_SESSION["login"])){
//   echo "<script>
//     alert ('silahkan login dulu');
//     document.location.href = '1.login.php';
    
//   </script>";
//   exit ;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#"><b>SELAMAT DATANG ADMIN</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
</nav>
<div class="row  ">
    <div class="col-md-2 bg-dark mt-0 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
    <li class="nav-item">
    <a class="nav-link  text-white" href="3.daftar menu.php"><i class="fa-solid fa-gauge"></i>Dashbord</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link  text-white" href="4.table mahasiswa.php">Daftar Mahasiswa</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="7.table mentor.php">Daftar Mentor</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="10.table jadwalbelajar.php">Jadwal Mengajar</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-white" href="13.table pembayaran.php">Pembayaran</a>  <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="17.logout.php">Logout</a> <hr class="bg-secondary">
    <br><br><br>
  </li>
</ul>
</div>
    <div class="col-md-10 p-5 pt-2">
      <h3>DASHBORD</h3>
      <hr>
      <BR></BR>
      </div>
<?php
include "1.koneksi database.php" ;


if (isset($_POST['aksi'])) {
  if ($_POST['aksi'] == "tambah") {
    $nimMahasiswa1 = $_POST['nimMahasiswa1'];
    $idTransaksi = $_POST['idTransaksi'];
    $biaya = $_POST['biaya'];
    $tanggalTransaksi = $_POST['tanggalTransaksi'];
   
    $buktiPembayaran = $_FILES['buktiPembayaran']['name'];
    $file_tmp = $_FILES['buktiPembayaran']['tmp_name'] ;
   
    move_uploaded_file($file_tmp, __DIR__ .'fotoTsaqif/' .$buktiPembayaran) ;
    $query = "INSERT INTO pembayaran1 VALUES('$nimMahasiswa1','$idTransaksi','$biaya','$tanggalTransaksi','$buktiPembayaran')";

    header("Location:13.table pembayaran.php");
    $sql = mysqli_query($conn, $query);
    
  } else if ($_POST['aksi'] == "edit") {
    $nimMahasiswa1 = $_POST['nimMahasiswa1'] ;
    $idTransaksi = $_POST['idTransaksi'] ; 
    $biaya = $_POST['biaya'] ;
    $tanggalTransaksi = $_POST['tanggalTransaksi'] ;
    $queryShow = "SELECT * FROM pembayaran1 WHERE idTransaksi  = '$idTransaksi ';";
		$sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
		$result = mysqli_fetch_assoc($sqlShow);
		if($files['buktiPembayaran']['name'] == ""){
			$buktiPembayaran= $result['buktiPembayaran'];
		} else {
			$split = explode('.', $files['buktiPembayaran']['name']);
			$ekstensi = $split[count($split)-1];
			$buktiPembayaran = $result['idTransaksi'].'.'.$ekstensi;
			unlink(__DIR__ .'fotoTsaqif/'.$result['buktiPembayaran']);
      move_uploaded_file($file_tmp, __DIR__ .'fotoTsaqif/' .$buktiPembayaran) ;
		}
		// $sql = mysqli_query($GLOBALS['conn'], $query);
    // $buktiPembayaran = $_POST['buktiPembayaran'] ;
    $query = "UPDATE pembayaran1 SET nimMahasiswa1 = '$nimMahasiswa1' , idTransaksi = '$idTransaksi'  , biaya  = '$biaya' , tanggalTransaksi = '$tanggalTransaksi',buktiPembayaran = '$buktiPembayaran'  where idTransaksi = '$idTransaksi' ;" ;
    $sql = mysqli_query($GLOBALS['conn'], $query);
    // $sql = mysqli_query($conn, $query);
    if ($sql) {
      header("location: 13.table pembayaran.php");
    } else {
      echo $query;
    }
  }
}

if (isset($_GET['hapus'])){
    //  header("location : 5.Create Dilakukan Oleh Admin.php ");
    $idTransaksi = $_GET['hapus'];
    $query = "DELETE FROM pembayaran1 WHERE idTransaksi = '$idTransaksi';";
    $sql = mysqli_query($conn,$query);
    header("Location: 13.table pembayaran.php");
}


?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>