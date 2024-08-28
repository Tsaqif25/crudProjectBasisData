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

<?php
include "1.koneksi database.php" ;
$query = "SELECT *FROM jadwalBelajar "  ;
$sql  = mysqli_query($conn, $query);
//  $result = mysqli_fetch_assoc( $sql);
//  while ($result = mysqli_fetch_assoc( $sql)){
//  var_dump($result);
//  echo $result['namaMahasiswa'] ;
//  }
$no = 1;
?>

<!doctype html>
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
  <nav class="navbar navbar-expand-lg navbar-light bg-success mt-(-10)">
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
      <h3>Jadwal Belajar</h3>
   
    <!-- <h1>Hello, world!</h1> -->
     <a href="11. create jadwalbelajar.php" type="button" class="btn btn-primary">Tambah Data</a> 
    <br><br>
 
    <table class="table table-striped" id="datatables">
      <thead>
        <tr>
          <th scope="col">Kode Jadwal</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Hari </th>
          <th scope="col">Jam</th>
          <th scope="col">Nama Kelas </th>
          <th scope="col">Nim Mahasiswa</th>
          <th scope="col">Id Mentor</th>
          <th scope="col">Id Zoom Meeting</th>
          <th scope="col" class="text-center">Aksi</th>
          <th scope="col" class="text-center">Aksi</th>
        </tr>
      </thead>
     
      <tbody>
      <?php 
    while ($result = mysqli_fetch_assoc( $sql)){
      ?>
        <tr>
          <td> <?php  echo $result['kodeJadwal']; ?> </td>
          <td> <?php  echo $result["tanggal"]; ?> </td>
          <td>  <?php  echo $result["hari"]; ?></td>
          <td> <?php  echo $result["jam"]; ?></td>
          <td> <?php  echo $result["namaKelas"]; ?></td>
          <td> <?php  echo $result["nimMahasiswa1"]; ?></td>
          <td> <?php  echo $result['idMentor']; ?></td>
          <td> <?php  echo $result['idZoomMeeting']; ?></td>
          <td> <a href= "12.proses crud jadwalbelajar.php?hapus=<?php echo $result['kodeJadwal'];?> "type="button" class=  "btn btn-danger" onClick = "return confirm ('Apakah Anda Ingin Menghapus ?')"  ;?> Hapus</a></td>
          <td> <a href ="11. create jadwalbelajar.php?ubah=<?php echo $result['kodeJadwal'];?> "type="button" class="btn btn-info">Ubah </a></td>  
        </tr>
        
        </tr>
        
        </tr>
       <?php
    } 
       ?>

    
         </tbody>
    </table>
  </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script>
 <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
   $(document).ready(function () {
    $('#datatables').DataTable();
});



    </script>
  </body>
</html>