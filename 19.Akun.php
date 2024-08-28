<?php
// session_start();
// // Membatasi Halaman Sebelum Login
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
$namaMahasiswa1 = '' ;
$jurusan1 = '' ;
$nimMahasiswa1 = '' ;
$noHP1 = '' ;

if (isset($_GET['ubah2'])){
    include '1.koneksi database.php';

    $nimMahasiswa1 = $_GET ['ubah2'];
    $query = "SELECT * FROM mahasiswa1 WHERE nimMahasiswa1 = '$nimMahasiswa1';" ;
    $sql = mysqli_query($conn,$query);

    $result = mysqli_fetch_assoc ($sql);
    $namaMahasiswa1 = $result['namaMahasiswa1'];
    $jurusan1 = $result['jurusan1'];
    $nimMahasiswa1 = $result['nimMahasiswa1'];
    $noHP1 = $result['noHP1'];
    
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
        
        <form method="POST" action="20.proses akun.php">
            <input type="hidden" value = "<?php echo $nimMahasiswa1?>" name = "nimMahasiswa1">
        <h2 class="alert alert-success text-center mt-3"> Input Data Mahasiswa </h2>
            <div class="form-group ">
                <label for="namalengkap">Nama Lengkap</label>
                <input required type="text" name="namaMahasiswa1" class="form-control" placeholder="Masukkan Nama Lengkap Anda" id="namalengkap" value = "<?php echo $namaMahasiswa1;?>" >
            </div>
            <div class="form-group">
                <label   for=""> Pilih Jurusan Anda</label>
                <select required class="form-control" name ="jurusan1" value = "<?php echo $jurusan1;?>" >
                    <option value="Teknik Elektronika" <?php if($jurusan1  == 'Teknik Elektronika'){echo "selected";} ?> >  1.Teknik Elektronika</option>
                    <option value="Teknik Otomotif" <?php if($jurusan1     == 'Teknik Otomotif'){echo "selected";} ?>>2.Teknik Otomotif</option>
                    <option value="Teknik Sipil" <?php if($jurusan1        == 'Teknik Sipil'){echo "selected";} ?>>3.Teknik Sipil</option>
                    <option value="Teknik Elektro" <?php if($jurusan1      == 'Teknik Elektro'){echo "selected";} ?>>4.Teknik Elektro</option>
                    <option value="Teknik Mesin" <?php if($jurusan1        == 'Teknik Mesin'){echo "selected";} ?>>5.Teknik Mesin</option>
                    <option value="Teknik Pertambangan" <?php if($jurusan1 == 'Teknik Pertambangan'){echo "selected";} ?>>6.Teknik Pertambangan</option>
                    
                </select>
               </div>
            <div class="form-group ">
                <label for="nim">Nim</label>
                <input  required type="number" name="nimMahasiswa1" class="form-control" placeholder="Masukkan Nim" id="nim" value = "<?php echo $nimMahasiswa1;?>" >
            </div>

            <div class="form-group ">
                <label for="nomor">Nomor</label>
                <input required type="nomor" name="noHP1" class="form-control" placeholder="Masukkan Nomor Telephone" id="nomor" value = "<?php echo $noHP1;?>" >
            </div>
          
                <br><br>
                <div class="mb-3 row mt-4">
              <div class="col"> 
                <?php
                    if(isset($_GET['ubah2'])){
                ?>
                <button  require type="submit" name="aksi2" value = "edit2" class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Simpan Perubahan
            </button>
            <?php
                } 
                else {
            ?>
            <button require type="submit" name="aksi2"  value = "tambah2"  class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Tambahkan
                
                </button>
            <?php
                }
                ?>

            <a href="16.live class.php" type="button" class="btn btn-danger">
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

