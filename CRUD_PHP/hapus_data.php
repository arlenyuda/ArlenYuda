<?php
    $judul = "Konfirmasi Hapus Data";
    include "kepala.php";

    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "select * from pengguna where id_pengguna = '$id' order by nama_pengguna ASC") or die(mysqli_error($koneksi));
    while($result = mysqli_fetch_array($query)){

?>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header bg-warning">
                    <strong>Konfirmasi Hapus Data</strong>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Yakin mau menghapus?</h5>
                    <p class="card-text">Data atas nama <?php echo $result['nama_pengguna']; ?> akan dihapus</p>
                    <a href="hapus.php?id=<?php echo $result['id_pengguna']; ?>" class="btn btn-danger float-start">Hapus</a>
                    <a href="tampil_data.php" class="btn btn-success float-end">Batal</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }

include "kaki.php";
?>