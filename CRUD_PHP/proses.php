<?php
include 'kepala.php';
    if(isset($_POST['nama'])){
        $nama=$_POST['nama'];
        echo "Nama Anda : <b> $nama </b>";       
    } else {
        echo "Tidak Ada Data";
    }
include 'kaki.php';
?>