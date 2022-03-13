<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "latihan_php";
$koneksi = mysqli_connect($server, $user, $pass, $dbname);
if(mysqli_connect_errno()){
echo "Koneksi database gagal".mysqli_connect_error();
}
?>