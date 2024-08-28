<?php
include "1.koneksi database.php" ;
if (isset($_POST['submit'])) {
  $gmail = $_POST['gmail'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $level = $_POST['level'];
  $duplicate = mysqli_query ($conn,"SELECT * FROM akun WHERE gmail =' $gmail' " );


  if (mysqli_num_rows( $duplicate) > 0){
    echo 
        " <script> alert ( 'Username OR Gmail Has Already Taken') ; </script> " ;
  }
  else {
    if ($password == $confirmpassword ){
      $query = "INSERT INTO akun VALUES ('$gmail','$password','$level')";
      mysqli_query ($conn,$query); 
      echo 
      " <script> alert ( 'Registration Successuful') ; </script> " ;
    }
    else {
        echo     
        " <script> alert ( 'Password not match') </script> " ;
    }
  } 
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
            <h1>Registration Toefl Preparation Online</h1>
            <br>
           
            <!-- <img src="gambar logo unp.png" alt=""> -->
            <img class="" src="gambar kampus merdeka.jpg" alt="">
            
          </div>
          <br><br>
          <div class="col-sm">
           
       
          <form class = "" method = "POST" >
          
  <div class="form-group input">
    <label for ="gmail">gmail</label>
    <input type="text" class="form-control" id = "gmail" aria-describedby="" placeholder="Masukkan Gmail" name = "gmail" required value = "">
  
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input type="password" class="form-control" id="password" aria-describedby="" placeholder="Masukkan password" name = "password" required value = "">
  
  </div>

  <div class="form-group">
    <label for = "password">Confirm Password</label>
    <input type="password" class="form-control" id = "password" placeholder="Password" name = "confirmpassword" required value = "">
  </div>

  <!-- <div class="form-group">
    <label for = "level">level</label>
    <input type="level" class="form-control" id = "level" placeholder="level" name = "level" required value = "">
  </div> -->
   <div class="form-group">
                <label   for=""> Pilih Level </label>
                <select required class="form-control" name ="level"  >
                    <option value="mahasiswa">   mahasiswa</option>
                </select>
  </div> 
  <a href="1.login.php" class="btn btn-primary"> Login</a>  
  <button type="submit"  name = "submit" class="btn btn-primary">Register</button>
</form>
<br><br>
 
                

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>