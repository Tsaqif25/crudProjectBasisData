<?php
// session_start();
// // Membatasi Halaman Sebelum Login
// if (!isset($_SESSION["submit"])){
//   echo "<script>
//     alert ('silahkan login dulu');
//     document.location.href = '1.login.php';
    
//   </script>";
//   exit ;
// }

?>
<?php
include "1.koneksi database.php" ;
$query = "SELECT *FROM mentor1 "  ;
$sql  = mysqli_query($conn, $query);

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
      <h3>Data Mentor</h3>
   
    <!-- <h1>Hello, world!</h1> -->
     <a href="8.create mentor.php" type="button" class="btn btn-primary">Tambah Data</a> 
    <br><br>
 
    <table class="table table-striped" id="datatables">
      <thead>
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Nama Mentor</th>
          <th scope="col">Id Mentor</th>
          <th scope="col">Nomor Telfon</th>
          <th scope="col">Pengalaman Mengajar</th>
          <th scope="col" class="text-center">Aksi</th>
          <th scope="col" class="text-center">Aksi</th>
        </tr>
      </thead>
     
      <tbody>
      <?php 
    while ($result = mysqli_fetch_assoc( $sql)){
      ?>
        <tr>
          
          <td> <?php  echo $no++ ?> </td>
          <td> <?php  echo $result['namaMentor']; ?> </td>
          <td> <?php  echo $result['idMentor']; ?> </td>
          <td> <?php  echo $result['nomorTelfonMentor']; ?></td>
          <td> <?php  echo $result['pengalamanMengajar']; ?></td>
           <td> <a href="9.proses crud mentor.php?hapus1=<?php echo $result['idMentor'] ;?> "type="button" class=  "btn btn-danger" onClick = "return confirm ('Apakah Anda Ingin Menghapus ?')"  ;?> Hapus</a></td>
          <td> <a href ="8.create mentor.php?ubah1=<?php echo $result['idMentor']; ?>" type="button" class="btn btn-info">Ubah </a></td>  
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