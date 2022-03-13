<?php
    $judul = "Hapus Data";
    include "kepala.php";

    include "koneksi.php";

    $id = $_GET['id'];
    mysqli_query($koneksi, "delete from pengguna where id_pengguna='$id'")
?>

    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-sm-4">
                <div class="card bg-warning">
                    <div class="card-body">
                        <p><strong>Selamat, data berhasil dihapus</strong></p>
                        <a href="tampil_data.php" class="btn btn-primary float-end">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include "kaki.php";
?>