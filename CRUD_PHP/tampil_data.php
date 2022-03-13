<?php
    $judul = "Tampil Data";
    include "kepala.php";
?>

<div class="container mt-3">
    <div class="row justify-content-md-center">
        <div class="col-sm-10">
            <a href="input_data.php" class="btn btn-success float-end mb-3">+ Tambah data</a>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Level</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $no=1;
                    $query = mysqli_query($koneksi, "select * from pengguna order by nama_pengguna ASC") or die(mysqli_query($koneksi));
                    while($result = mysqli_fetch_array($query)) {
                        if($result['level'] == 1) {
                            $level = "Administrator";
                        } else if ($result['level'] == 2) {
                            $level = "Operator";
                        } else if ($result['level'] == 3) {
                            $level = "User";
                        } else {
                            $level = "Belum ada privilledge";
                        }
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no++;?></td>
                        <td><?php echo $result['nama_pengguna'];?></td>
                        <td><?php echo $level;?></td>
                        <td class="text-center">
                            <a href="edit_data.php?id=<?=$result['id_pengguna'];?>" class="btn btn-warning">Edit</a>
                            <a href="hapus_data.php?id=<?=$result['id_pengguna'];?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    include "kaki.php";
?>