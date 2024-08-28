
<!doctype html>

<?php
$nimMahasiswa = '' ;
$namaMahasiswa = '' ;
$noHP = '' ;
$jurusan = '' ;

if (isset($_GET['ubah'])){
    include '1.koneksi database.php';

    $nimMahasiswa = $_GET['ubah'];
    $query = "SELECT * FROM mahasiswa1 WHERE nimMahasiswa = '$nimMahasiswa';" ;
    $sql = mysqli_query($conn,$query);

    $result = mysqli_fetch_assoc ($sql);
    $nimMahasiswa = $result['nimMahasiswa'];
    $namaMahasiswa = $result['namaMahasiswa'];
     $noHP = $result['noHP'];
     $jurusan = $result['jurusan'];

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

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
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
    <a class="nav-link text-white" href="#">Daftar Mentor</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Jadwal Mengajar</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-white" href="#">Pembayaran</a> 
  </li>
</ul>
</div>
<div class="col-md-10 ">
        <form method="POST" action="6.Proses.php">
            <input type="hidden" value = "<?php echo $nimMahasiswa?>" name = "nimMahasiswa">
        <h2 class="alert alert-success text-center mt-3">Formulir Pendaftaran Toefl</h2>
            <div class="form-group ">
                <label for="namalengkap">Nama Lengkap</label>
                <input required type="text" name="namaMahasiswa" class="form-control" placeholder="Masukkan Nama Lengkap Anda" id="namalengkap" value = "<?php echo $namaMahasiswa;?>" >
            </div>
            <div class="form-group">
                <label   for=""> Pilih Jurusan Anda</label>
                <select required class="form-control" name ="jurusanMahasiswa" value = "<?php echo $jurusan;?>" >
                    <option value="Teknik Informatika" <?php if($jurusan  == 'Teknik Informatika'){echo "selected";} ?> >  1.Teknik Elektronika</option>
                    <option value="Teknik Otomotif" <?php if($jurusan     == 'Teknik Otomotif'){echo "selected";} ?>>2.Teknik Otomotif</option>
                    <option value="Teknik Sipil" <?php if($jurusan        == 'Teknik Sipil'){echo "selected";} ?>>3.Teknik Sipil</option>
                    <option value="Teknik Elektro" <?php if($jurusan      == 'Teknik Elektro'){echo "selected";} ?>>4.Teknik Elektro</option>
                    <option value="Teknik Mesin" <?php if($jurusan        == 'Teknik Mesin'){echo "selected";} ?>>5.Teknik Mesin</option>
                    <option value="Teknik Pertambangan" <?php if($jurusan == 'Teknik Pertambangan'){echo "selected";} ?>>6.Teknik Pertambangan</option>
                    
                </select>
               </div>
            <div class="form-group ">
                <label for="nim">Nim</label>
                <input  required type="nim" name="nimMahasiswa" class="form-control" placeholder="Masukkan Nim" id="nim" value = "<?php echo $nimMahasiswa;?>" >
            </div>

            <div class="form-group ">
                <label for="nomor">Nomor</label>
                <input required type="nomor" name="nomorTelepon" class="form-control" placeholder="Masukkan Nomor Telephone" id="nomor" value = "<?php echo $noHP;?>" >
            </div>
          
                <br><br>
              <div class="mb-3 row mt-4">
              <div class="col"> 
                <?php
                    if(isset($_GET['ubah'])){
                ?>
                <button  require type="submit" name="aksi" value="edit" class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Simpan Perubahan
            </button>
            <?php
                } 
                else {
            ?>
            <button require type="submit" name="aksi"  value="tambah"  class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Tambahkan
                
                </button>
            <?php
                }
                ?>

            <a href="4.penginputan dilakukan oleh admin.php" type="button" class="btn btn-danger">
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

