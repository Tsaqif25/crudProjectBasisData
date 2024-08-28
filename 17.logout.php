<?php
include "1.koneksi database.php" ;
// mengaktifkan session php
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman ke halaman login
header("location:1.login.php");
?>