<?php
include "db/koneksi.php";
if (isset($_POST["bukutamu-add"])){
    $namatamu = $_POST["namatamu"];
    $alamattamu = $_POST["alamattamu"];
    $notelptamu = $_POST["notelptamu"];
    $pesantamu = $_POST["pesantamu"];
    $tanggalbertamu = $_POST["tanggalbertamu"];

    $add = $koneksi->query("INSERT INTO tb_bukutamu VALUES ('', '$namatamu', '$alamattamu', '$notelptamu', '$pesantamu', '$tanggalbertamu')");

    
}
?>
<div class="row">
    <!-- BAGIAN KIRI -->
    <div class="col-md-8">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Nama Tamu</label>
                <input type="text" class="form-control" name="namatamu">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat Tamu</label>
                <input type="text" class="form-control" name="alamattamu">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NoTelp Tamu</label>
                <input type="text" class="form-control" name="notelptamu">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pesan Tamu</label>
                <textarea class="form-control" rows="3" name="pesantamu"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Bertamu</label>
                <input type="date" class="form-control" name="tanggalbertamu">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="bukutamu-add">Kirim</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
            </div>
        </form>
    </div>

    <!-- BAGIAN KANAN -->
    <div class="col-md-4">

    </div>
</div>