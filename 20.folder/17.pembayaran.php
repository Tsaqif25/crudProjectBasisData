

<?php
include "1.koneksi database.php" ;
$query = "SELECT *FROM pembayaran"  ;
$sql  = mysqli_query($conn, $query);
//  $result = mysqli_fetch_assoc( $sql);
//  while ($result = mysqli_fetch_assoc( $sql)){
//  var_dump($result);
//  echo $result['namaMahasiswa'] ;
//  }
// $no = 1;
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
  <nav class="navbar navbar-expand-lg navbar-light bg-warning mt-(-10)">
  <a class="navbar-brand" href="#"><b>SELAMAT DATANG ADMIN</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
</nav>
<div class="row  ">
    <div class="col-md-2 bg-dark mt-0 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
    <li class="nav-item">
    <a class="nav-link  text-white" href="3.index.php"><i class="fa-solid fa-gauge"></i>Dashbord</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link  text-white" href="4.penginputan dilakukan oleh admin.php">Daftar Mahasiswa</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="11.Input Untuk Mentor.php">Daftar Mentor</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="14.JadwalBelajar.php">Jadwal Mengajar</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-white" href="17.pembayaran.php">Pembayaran</a> 
  </li>
</ul>
</div>
   
<div class="col-md-10 p-5 pt-2">
      <h3>Daftar Mahasiswa</h3>
   
    <!-- <h1>Hello, world!</h1> -->
     <a href="18.create pembayaran.php" type="button" class="btn btn-primary">Tambah Data</a> 
    <br><br>
 
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nim Mahasiswa</th>
          <th scope="col">Id Transaksi</th>
          <th scope="col">Biaya</th>
          <th scope="col">Tanggal Transaksi</th>
          <th scope="col">Bukti Pembayaran</th>
         
          
          <th scope="col" class="text-center">Aksi</th>
        </tr>
      </thead>
     
      <tbody>
      <?php 
    while ($result = mysqli_fetch_assoc( $sql)){
      ?>
        <tr>
          
         
          <td>  <?php  echo $result["nimMahasiswa1"]; ?></td>
          <td> <?php  echo $result['idTransaksi']; ?></td>
          <td> <?php  echo $result['biaya']; ?> </td>
          <td> <?php  echo $result['tanggalTransaksi']; ?> </td>
          <td> <?php  echo $result['buktiPembayaran']; ?> </td>
          
         

          <td> <a href="19.proses.php?hapus=<?php echo $result['idTransaksi'] ;?> "type="button" class=  "btn btn-danger" onClick = "return confirm ('Apakah Anda Ingin Menghapus ?')"  ;?> Hapus</a></td>
          <td> <a href ="18.create pembayaran.php?ubah=<?php echo $result['idTransaksi']; ?>" type="button" class="btn btn-info">Ubah </a></td> 
        </tr>
        <a href=""></a>
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
    
  </body>
</html>