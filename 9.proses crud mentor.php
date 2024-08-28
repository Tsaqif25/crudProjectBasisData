<?php

// // Membatasi Halaman Sebelum Login
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <a class="nav-link disabled text-white" href="13.table pembayaran.php">Pembayaran</a> <hr class="bg-secondary">
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

<?php
include "1.koneksi database.php" ;

if (isset($_POST['aksi1'])) {
  if ($_POST['aksi1'] == "tambah1") {
    $namaMentor = $_POST["namaMentor"];
    $idMentor = $_POST["idMentor"];
    $nomorTelfonMentor   = isset ($_POST[' $nomorTelfonMentor '])? $_POST[' $nomorTelfonMentor '] : '';;
    // $nomorTelfonMentor = $_POST["nomorTelfonMentor "];
    $pengalamanMengajar = $_POST["pengalamanMengajar"];
    $query = "INSERT INTO mentor1 VALUES('$namaMentor','$idMentor','$nomorTelfonMentor','$pengalamanMengajar')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
      header("Location:7.table mentor.php");
    } else {
      header("Location:8.create mentor.php");

    }
  }

  if ($_POST['aksi1'] == "edit1") {
    $namaMentor = $_POST['namaMentor'];
    $idMentor = $_POST['idMentor'];
    $nomorTelfonMentor = $_POST['nomorTelfonMentor'];
    $pengalamanMengajar = $_POST['pengalamanMengajar'];
    $query = " UPDATE mentor1 SET namaMentor = '$namaMentor' , idMentor = '$idMentor'  , nomorTelfonMentor = '$nomorTelfonMentor', pengalamanMengajar = '$pengalamanMengajar' where  idMentor = '$idMentor' ;";

    // header("Location:7.table mentor.php");
    $sql = mysqli_query($conn, $query);
    if ($sql) {
      header("Location: 7.table mentor.php");
    } else {
      echo $query;
    }

  }
}


if (isset($_GET['hapus1'])){
    
    $idMentor= $_GET['hapus1'] ;
    $query = "DELETE FROM mentor1 WHERE   idMentor = '$idMentor';" ;
    header("Location:7.table mentor.php");
    $sql = mysqli_query($conn,$query);
     if ($sql){
        echo "berhasil dihapus" ;
     }
    // var_dump($_POST);
   
   
  
  

  else {       
    echo "tidak berhasil dihapus" ;
    //   <a href ="1.table.php"></a>
}

     
}


?>
<?php

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>