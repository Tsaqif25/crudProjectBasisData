
<?php
// include 'config/app.php' ; 
// mengecek apakah tombol login sudah ditekan
if (isset($_POST['login'])) {
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // check username
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE nim = '$nim'");
    // jika ada usernya

    if (mysqli_num_rows($result) == 1) {
        // check passwordnya
        $hasil = mysqli_fetch_assoc($result);

        if (password_verify($password, $hasil['password'])) {
            // set session
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $hasil['nama'];
            $_SESSION['nim'] = $hasil['nim'];
            $_SESSION['level'] = $hasil['level'];

            // jika login benar arahkan ke file 3.daftar menu
            header("Location: 3.daftar menu.php");
            exit;
        }
    }
    $error = true;
}

    ?>
    <!-- $nim = $_POST["nim"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT * FROM userlogin WHERE nim = '$nim' ");
    $row = mysqli_fetch_assoc ($result);
    if (mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
         $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location:3.index.php");
    }
    else {
        echo
        "<script> alert('wrong Password'); </script>" ;
    }
}
    else {
        echo
        "<script> alert('User Not Registered'); </script>" ;
    
}
    }


?> -->

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
            <h1>Toefl Preparation Online</h1>
            <br>
           
            <!-- <img src="gambar logo unp.png" alt=""> -->
            <img class="" src="gambar kampus merdeka.jpg" alt="">
            
          
          <br><br>
          </div>
          <div class="col-sm">
           
       
  <form class = "" method = "POST" >
    <h1>LOGIN</h1>
  <div class="form-group">
    <label for="nama">nama</label>
    <input type= "text" class="form-control" id="nama" placeholder="Masukkan Nama" name = "nim" required value = "">
  
  </div>
 <?php 
    if(isset($error)) : ?> 
  <div class="alert alert-danger text-center">
    <b>username dan password salah</b>
  </div>
  <?php endif; ?>
  
  <div class="form-group">
    <label for="nim">Nim</label>
    <input type= "nim" class="form-control" id="nim" placeholder="Masukkan Nim" name = "nim" required value = "">
  
  </div>
 
  <div class="form-group">
    <label for = "password">Password</label>
    <input type="password" class="form-control" id = "password" placeholder="Password" name = "password" required value = "">
  </div>

  <div class="form-group">
    <label for = "level">level</label>
    <input type="level" class="form-control" id = "level" placeholder="level" name = "level" required value = "">
  </div>
  
  <button type="submit"  name = "login" class="btn btn-primary">Login</button>
  <a href="2.Register.php"> Login</a>
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>