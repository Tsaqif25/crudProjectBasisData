<?php


include'1.login.php' ;
$_SESSION = [];
session_unset();
session_destroy();
header ("Location:1.login.php");






?>