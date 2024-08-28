<?php
include "1.koneksi database.php" ;

if (isset ($_POST["submit"])){
  $nama = $_POST["nama"];
  $username = $_POST["username"];
  $gmail = $_POST["gmail"];
  $password = $_POST["password"];
  $confirmpassword =   $_POST["confirmpassword"];
  $duplicate = mysqli_query ($conn,"SELECT * FROM login WHERE username =' $username' OR gmail = '$gmail'" );
  if (mysqli_num_rows( $duplicate) > 0){
    echo " Username OR Gmail Has Already Taken " ;
  } else {
    if ($password == $confirmpassword ){
      $query = "INSERT INTO login VALUES ('$username','$gmail','$nama','$password')" ;
      mysqli_query ($conn,$query);
      echo "Registration Successful" ;
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
    <br><br><br><br>
  <div class="row">
          <div class="col-sm">
            <h1>Toefl Preparation Online</h1>
            <br>
           
            <!-- <img src="gambar logo unp.png" alt=""> -->
            <img class="" src="gambar kampus merdeka.jpg" alt="">
            
          </div>
          <br><br>
          <div class="col-sm">
            <?php
        if (isset ($_POST["submit"])){
          $nama = $_POST["nama"];
          $username = $_POST["username"];
          $gmail = $_POST["gmail"];
          
          $password = $_POST["password"];
          $confirmpassword =   $_POST["confirmpassword"];
          $duplicate = mysqli_query ($conn,"SELECT * FROM login WHERE username =' $username' OR gmail = '$gmail'" );
          if (mysqli_num_rows( $duplicate) > 0){
              if ($password == $row["password"]){
                $_SESSION["1.Login dan Register.php"] = true ;
                header ("Location :1.koneksi database.php");
              }
            echo " Username OR Gmail Has Already Taken " ;
          }
          else {
            if ($password == $confirmpassword ){
              $query = "INSERT INTO login VALUES ('$nama','$username','$gmail','$password')" ;
              mysqli_query ($conn,$query);
              echo "Registration Successful" ;
            }
          }
         
        }
            ?>
            <div class="container">
              <div class="container1 ">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>

                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                BAGIAN INI JIKA SUDAH PUNYA AKUN
                <br>
                <button type="button" class=" btn1 btn-success" data-toggle="modal" data-target="#contohModal">Buat Akun Baru</button>
                <div class="modal fade" id="contohModal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Daftar <br> Cepat dan Mudah</h5>
                              
                                <hr>
                                <button type="button" class="close" data-dismiss ="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="nama">Username</label>
                                        <input type="text" id="nama" name="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Gmail">Gmail </label>
                                        <input type="text" id="Gmail" name="gmail" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Gmail">Nama </label>
                                        <input type="text" id="Gmail" name="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name = "password">
                                    </div>
                                    <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name = "confirmpassword">
                                    </div>
                              
                                    <div class="footer">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                        <button type="submit" class="btn btn-danger">RESET</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
              
          </div>
      
        </div>
      </div>
      </div>
      <br><br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>