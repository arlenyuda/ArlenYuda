<?php
    $judul = "Edit Data";
    include "kepala.php";

    include "koneksi.php";
    $id = $_GET['id'];
    $query =  mysqli_query($koneksi, "select * from pengguna where id_pengguna = '$id' order by nama_pengguna ASC") or die(mysqli_error($koneksi));
    while($result = mysqli_fetch_array($query)){
        if($result['level'] == 1){
            $ceksatu = 'checked';
            $cekdua = '';
            $cektiga = '';
        } else if($result['level'] == 2){
            $ceksatu = '';
            $cekdua = 'checked';
            $cektiga = '';
        } else if($result['level'] == 3){
            $ceksatu = '';
            $cekdua = '';
            $cektiga = 'checked';
        } else {
            $ceksatu = '';
            $cekdua = '';
            $cektiga = '';
        }
?>

    <div class="container mt-5">      
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        Masukkan data
                    </div>
                    <div class="card-body">
                        <form action="update_data.php" method="post">                   
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?=$result['nama_pengguna'];?>">
                                    <input type="hidden" id="id_pengguna" name="id_pengguna" value="<?=$result['id_pengguna'];?>">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-3 pt-0">Level</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" value="1" <?=$ceksatu;?>>
                                        <label class="form-check-label" for="Administrator">
                                            Administrator
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" value="2" <?=$cekdua;?>>
                                        <label class="form-check-label" for="Operator">
                                            Operator
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" value="3" <?=$cektiga;?>>
                                        <label class="form-check-label" for="User">
                                            User
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="submit" name="edit_simpan" class="btn btn-primary float-end" value ="Simpan Perubahan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    }
    include "kaki.php";
?> 