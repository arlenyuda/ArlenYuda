<?php
if (isset($_POST['simpan'])) {
    if(isset($_POST['nama']) && !empty($_POST['nama'])) {
        $nama = $_POST['nama'];
    } else {
        echo "Nama belum diisi, silahkan diisi terlebih dahulu<br>";
    }

    if(isset($_POST['password']) && !empty($_POST['password'])) {
        $pass = $_POST['password'];
    } else {
        echo "password belum diisi, silahkan diisi terlebih dahulu<br>";
    }

    $level = $_POST['level'];

    if(!empty($nama) && !empty($pass) && !empty($level)) {
        include "koneksi.php";
        mysqli_query($koneksi, "insert into pengguna values ('', '$nama', MD5('$pass'), '$level')");

        header('location: tampil_data.php');
    }
}

?>