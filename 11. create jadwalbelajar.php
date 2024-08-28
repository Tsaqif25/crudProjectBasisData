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
$kodeJadwal = '' ;
$tanggal = '' ;
$hari = '' ;
$jam = '';
$namaKelas = '';
$nimMahasiswa1 = '';
$idMentor = '';
$idZoomMeeting = '';


if (isset($_GET['ubah'])){
    include '1.koneksi database.php';

    $kodeJadwal = $_GET['ubah'];
   
  
    $query = "SELECT * FROM jadwalbelajar WHERE kodeJadwal = '$kodeJadwal';" ;
    $sql = mysqli_query($conn,$query);

    $result = mysqli_fetch_assoc ($sql);
    $kodeJadwal = $result['kodeJadwal'];
    $tanggal = $result['tanggal'];
    $hari = $result['hari'];
    $jam =  $result['jam'];
    $namaKelas =  $result['namaKelas'];
    $nimMahasiswa1 = $result['nimMahasiswa1'];
    $idMentor = $result['idMentor'];
    $idZoomMeeting = $result['idZoomMeeting'];
    

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
        

        <form method="POST" action="12.proses crud jadwalbelajar.php">
        <input type="hidden" value = "<?php echo $kodeJadwal?>" name = "kodeJadwal">
        <h2 class="alert alert-success text-center mt-3">Input Jadwal Belajar</h2>
        <div class="form-group ">
                <label for="kodeJadwal">Kode Jadwal</label>
                 <input required type="text" name="kodeJadwal" class="form-control" placeholder="Masukkan Kode Jadwal" id="kodeJadwal" value = "<?php  echo $kodeJadwal;?>" >
            </div>
            <div class="form-group ">
                <label for="tanggal">Tanggal</label>
                <input  required type="date" name="tanggal" class="form-control" placeholder="Masukkan tanggal" id="tanggal" value = "<?php echo $tanggal;?>" >
            </div>
            <div class="form-group">
                <label   for="hari"> Pilih Hari </label>
                <select required type="text" class="form-control" name ="hari" value = "<?php echo $hari;?>" >
                    <option  <?php if($hari    == 'Senin - Selasa') {echo "selected";}     ?> value = "Senin - Selasa" >  Senin - Selasa</option>
                    <option  <?php if($hari    == 'Rabu - Kamis') {echo "selected";} ?> value ="Rabu - Kamis" > Rabu - Kamis</option>
                    <option  <?php if($hari    == 'Jumat - Sabtu') {echo "selected";}       ?> value="Jumat - Sabtu">Jumat - Sabtu</option>
                    
                    
                </select>
               </div>


            <!-- <div class="form-group ">
                <label for="hari">Hari</label>
                <input required type="text" name="hari" class="form-control" placeholder="Masukkan hari" id="hari" value = "<?php echo $hari;?>" >
            </div> -->

            <div class="form-group">
                <label   for="hari"> Jadwal Belajar</label>
                <select required type="text" class="form-control" name ="jam" value = "<?php echo $jam;?>" >
                    <option  <?php if($jam   == '20.15 - 21.45') {echo "selected";}     ?> value = "07:00 - 09:00" >   20.15 - 21.45 </option>
               
                    
                    
                </select>
               </div>

            <!-- <div class="form-group ">
                <label for="jam">jam</label>
                <input required type="text" name="jam" class="form-control" placeholder="Masukkan Jam " id="jam" value = "<?php echo $jam;?>" >
            </div> -->
           

            <div class="form-group">
                <label   for="namaKelas"> Pilih Level Kelas</label>
                <select required type="text" class="form-control" name ="namaKelas" value = "<?php echo $namaKelas;?>" >
                    <option  <?php if($namaKelas    == '1.Toefl 1') {echo "selected";}     ?> value = "1.Toefl 1" >  1.Toefl 1</option>
                    <option  <?php if($namaKelas    == '2.Toefl 2') {echo "selected";} ?> value ="2.Toefl 2" > 2.Toefl 2</option>
                    <option  <?php if($namaKelas    == '3.Toefl 3') {echo "selected";}       ?> value="3.Toefl 3">3.Toefl 3</option>
                    
                    
                </select>
               </div>
            <div class="form-group ">
                <label for="nimMahasiswa1">Nim Mahasiswa</label>
                <input type="text" name="nimMahasiswa1" class="form-control" placeholder="Masukkan Nim Mahasiswa" id="nimMahasiswa1" value = "<?php echo $nimMahasiswa1;?>" >
            </div>
            <div class="form-group ">
                <label for="idMentor">Id Mentor</label>
                <input required type="text" name="idMentor" class="form-control" placeholder="Masukkan Id Mentor" id="idMentor" value = "<?php echo $idMentor;?>" >
            </div>
           

            <div class="form-group">
                <label   for="idZoomMeeting"> Pilih id Zoom Meeting </label>
                <select required type="text" class="form-control" name ="idZoomMeeting" value = "<?php echo $idZoomMeeting;?>" >
                    <option  <?php if($idZoomMeeting    == '123') {echo "selected";}     ?> value = "123" >  123</option>
                    <option  <?php if($idZoomMeeting    == '124') {echo "selected";} ?> value ="124" > 124</option>
                    <option  <?php if($idZoomMeeting    == '125') {echo "selected";}       ?> value="125">125</option>
                    
                    
                </select>
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

            <a href="10.table jadwalbelajar.php" type="button" class="btn btn-danger">
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

