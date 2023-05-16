<?php
include "db/koneksi.php";
$id = $_GET["id"];
$edit = $koneksi->query("SELECT * FROM tb_bukutamu WHERE id='$id'");
$data = $edit->fetch_assoc();
?>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Tamu</label>
                <input type="text" class="form-control" name="namatamu" value="<?php echo $data['nama_tamu'] ?>">
            </div>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>