<?php
include "1.koneksi database.php" ;
$query = "SELECT *FROM pembayaran1"  ;
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
        <link rel="stylesheet" href="proses pembayaran paket belajar style css.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
  </div>
</nav>
<div class="container">
<div class="row">

            <div class="col-sm-5 row1">
            <br><br>
                  <h3 class="font-weight-bold text-center">Checkout</h3>
                  <h3 class="font-weight-bold text-center">Pembayaran Melalui : BRI</h3>
                  <hr>
                 
                    <p class="text-center">Terima kasih atas pembelian Anda. Silakan gunakan informasi berikut untuk menyelesaikan pembayaran.</p>
                     <h5 class="text-center"> Rp 1000.000  </h5>
                    <h4 class="text-center">8902216500320793</h4>
                  
               
            </div>
            <div class="col-sm-5 row2 ml-4">
              
              <table class="table  text-white">
                <tbody class="text-center ">
                  <br><br>
                  <h3 class="font-weight-bold text-center" > Ringkasan </bold> </h3>
                  
                  <br>
                  <tr> 
                    <h6 style="color: gray " class="text-center">   Harga Asli : Rp 1000.000 </h6>
                    <hr>
                    <h6 class="font-weight-bold text-center">Total :Rp 1000.000</h6>

                   
                    <a href="19.proses pembayaran oleh user.php" type="button" class="btn btn-primary btn-block">Silahkan Upload Bukti Pembayaran</a>
                    <br>
                    <a href ="22.paket belajar.php" type="button" class=  "btn btn-danger btn-block"   > Batal</a>
                  </tr>
                 
                </tbody>
              </table>
                
              
            </div>
          </div>
          

          
      


    </div> 
          

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>