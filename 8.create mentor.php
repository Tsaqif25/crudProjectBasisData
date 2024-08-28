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
 include '1.koneksi database.php';
$namaMentor = '' ;
$idMentor = '' ;
$nomorTelfonMentor = '' ;
$pengalamanMengajar = '' ;

if (isset($_GET['ubah1'])){
   

    $idMentor  = $_GET['ubah1'];
    $query = "SELECT * FROM mentor1 WHERE idMentor = '$idMentor' ;" ;
    $sql = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc ($sql);
    $namaMentor = $result['namaMentor'];
    $idMentor = $result['idMentor'];
    $nomorTelfonMentor   = isset ($result['$nomorTelfonMentor'])? $result['$nomorTelfonMentor'] : '';;
    // $nomorTelfonMentor = $result['nomorTelfonMentor'];
    $pengalamanMengajar  = $result['pengalamanMengajar'];

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
        

        <form method="POST" action="9.proses crud mentor.php">
            <input type="hidden" value = "<?php echo $idMentor?>" name = "idMentor">
        <h2 class="alert alert-success text-center mt-3">Input Data Mentor</h2>
            <div class="form-group ">
                <label for="namalengkap">Nama Lengkap</label>
                <input required type="text" name="namaMentor" class="form-control" placeholder="Masukkan Nama Lengkap Mentor" id="namalengkap" value = "<?php echo $namaMentor;?>" >
            </div>
            <div class="form-group ">
                <label for="id">Id</label>
                <input  required type="id" name="idMentor" class="form-control" placeholder="Masukkan Id Mentor" id="id" value = "<?php echo  $idMentor;?>" >
            </div>

            <div class="form-group ">
                <label for="nomorTelfonMentor">Nomor Telfon</label>
                <input required type="text" name = "nomorTelfonMentor" class="form-control" placeholder="Masukkan Nomor Telephone" id="nomorTelfonMentor" value = "<?php echo $nomorTelfonMentor;?>" >
           
            </div>
            <div class="form-group ">
                <label for="pengalaman">Pengalaman Mengajar</label>
                <input required type="pengalaman" name="pengalamanMengajar" class="form-control" placeholder="Masukkan Pengalaman Mengajar" id="pengalaman" value = "<?php echo $pengalamanMengajar;?>" >
            </div>
          
                <br><br>
              <div class="mb-3 row mt-4">
              <div class="col"> 
                <?php
                    if(isset($_GET['ubah1'])){
                ?>
                <button  require type="submit" name="aksi1" value="edit1" class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Simpan Perubahan
            </button>
            <?php
                } 
                else {
            ?>
            <button require type="submit" name="aksi1"  value="tambah1"  class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Tambahkan
                
                </button>
            <?php
                }
                ?>

            <a href="7.table mentor.php" type="button" class="btn btn-danger">
                <i class="fa fa-reply" aria-hidden="true"></i>
                    Batal
            </a>

             
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

