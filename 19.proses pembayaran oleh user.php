
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
<!doctype html>

<?php


$nimMahasiswa1 = '' ;
$idTransaksi = '' ;
$biaya = '' ;
$tanggalTransaksi = '' ;
$buktiPembayaran = '';


if (isset($_GET['ubah'])){
   
    include '1.koneksi database.php';
    $idTransaksi = $_GET['ubah'] or die(mysqli_error($conn)); ;

    $query = "SELECT * FROM pembayaran1 WHERE idTransaksi = '$idTransaksi';" ;
    $sql = mysqli_query($conn,$query) or die(mysqli_error($conn)) ;

    $result = mysqli_fetch_assoc($sql) or die(mysqli_error($conn));
    $nimMahasiswa1 = $result['nimMahasiswa1'] or die(mysqli_error($conn));
    $idTransaksi = $result['idTransaksi']or die(mysqli_error($conn)); ;
     $biaya = $result['biaya'] or die(mysqli_error($conn));
     $tanggalTransaksi = $result['tanggalTransaksi'] or die(mysqli_error($conn)) ;
    $buktiPembayaran = $result['buktiPembayaran'] or die(mysqli_error($conn));
}

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Formulir Pendaftaran</title>
  </head>
  <body>
    <div class="container">
        

        <form  enctype = "multipart/form-data" method="POST" action="20.proses ke 2.php"  >
            <input type="hidden" value = "<?php echo $idTransaksi?>" name = "idTransaksi">
        <h2 class="alert alert-success text-center mt-3">Data Pembayaran</h2>

        <div class="form-group ">
                <label for="nim">Nim</label>
                <input  required type="text" name="nimMahasiswa1" class="form-control" placeholder="Masukkan Nim" id="nim" value = "<?php echo $nimMahasiswa1;?>" >
            </div>
            <div class="form-group ">
                <label for="idTransaksi">Id Trasaksi</label>
                <input required type="text" name="idTransaksi" class="form-control" placeholder="Masukkan Id Transaksi" id="idTransaksi" value = "<?php echo $idTransaksi;?>" >
            </div>

            <div class="form-group">
                <label   for="biaya">  biaya </label>
                <select required type="text" class="form-control" name ="biaya" value = "<?php echo $biaya;?>" >
                 
                    <option  <?php if($biaya    == '1000.0000') {echo "selected";} ?> value ="1000.0000" >Rp.1000.0000</option>
                 
                    
                </select>
               </div>

             
            <!-- <div class="form-group ">
                <label for="biaya">biaya</label>
                <input required type="text" name="biaya" class="form-control" placeholder="Masukkan Biaya" id="biaya" value = "<?php echo $biaya;?>" >
            </div> -->

            <div class="form-group ">
                <label for="tanggalTransaksi">Tanggal Transaksi</label>
                <input required type="date" name="tanggalTransaksi" class="form-control" placeholder="Masukkan Biaya" id="biaya" value = "<?php echo $tanggalTransaksi;?>" >
            </div>
          
            <div class="form-group ">
                <label for="buktiPembayaran">Bukti Pembayaran</label>
                <input required type="file" name="buktiPembayaran" class="form-control" placeholder="Masukkan Bukti Pembayaran" accept="image/*" id="buktiPembayaran" value = "<?php echo $buktiPembayaran;?>" >
            </div>
          
                <br><br>
              <div class="mb-3 row mt-4">
              <div class="col"> 
                <?php
                    if(isset($_GET['ubah'])){
                ?>
                <button  require type="submit" name="aksi" value= "edit" class="btn btn-primary">
                  
                Simpan Perubahan
                
            </button>
            <?php
                } 
                else {
                 ?>
            <button require type="submit" name="aksi"  value="tambah"  class="btn btn-primary">
                  
                Tambahkan
                
                </button>
            <?php
                }
                ?>

            <a href="22.paket belajar.php" type="button" class="btn btn-danger">
                <i class="fa fa-reply" aria-hidden="true"></i>
                    Batal
            </a>

             <!-- <a href="1.table.php"> </a> -->
              </div>
              </div>  
              </form>
    </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

