
<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include "1.koneksi database.php" ;
 
// menangkap data yang dikirim dari form login
$gmail    = isset ($_POST['gmail'])? $_POST['gmail'] : '';;
$password = isset ($_POST['password'])? $_POST['password'] : '';; 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM akun where gmail ='$gmail ' and password ='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['gmail'] = $gmail;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:3.daftar menu.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="mentor"){
		// buat session login dan username
		$_SESSION['gmail'] = $gmail;
		$_SESSION['level'] = "mentor";
		// alihkan ke halaman dashboard pegawai
    header("location:27.mentor.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="mahasiswa"){
		// buat session login dan username
		$_SESSION['gmail'] = $gmail;
		$_SESSION['level'] = "mahasiswa";
		// alihkan ke halaman dashboard pengurus
     header("location:16.live class.php");
	 
 
	}else{
 
		// alihkan ke halaman login kembali
		// header("location:index.php?pesan=gagal");
	}	
}else{
	// header("location:index.php?pesan=gagal");
}
 
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
  <br><br><br><br><br>
    <div class = "container">
  <div class="row">
          <div class="col-sm">
            <h1>Login Toefl Preparation Online</h1>
            <br>
            <!-- <img src="gambar logo unp.png" alt=""> -->
            <img class="" src="gambar kampus merdeka.jpg" alt="">
          <br><br>
          </div>
          <div class="col-sm">
  <form class = "" method = "POST" >
       
  
  <div class="form-group">
    <label for="gmail">gmail</label>
    <input type= "gmail" class="form-control" id="gmail" placeholder="Enter email" name = "gmail" required value = "">
  
  </div>
 
  <div class="form-group">
    <label for = "password">Password</label>
    <input type="password" class="form-control" id = "password" placeholder="Password" name = "password" required value = "">
  </div>
  
  <button type="submit"  name = "login" class="btn btn-primary">Login</button>
 
  <a href="2.Register.php" class="btn btn-primary"> Register</a>  
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>