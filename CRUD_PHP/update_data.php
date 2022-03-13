<?php
    if (isset($_POST['edit_simpan'])) {
        $nama           = $_POST['nama'];
        $id_pengguna    = $_POST['id_pengguna'];
        $level          = $_POST['level'];
        
        if (!empty($nama) && !empty($level)) {
            include "koneksi.php";
            mysqli_query($koneksi, "update pengguna set nama_Pengguna='$nama', level='$level' WHERE id_pengguna='$id_pengguna'");

            header('location: tampil_data.php');
        }
    }
?>