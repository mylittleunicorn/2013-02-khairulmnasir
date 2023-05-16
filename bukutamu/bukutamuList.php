<?php include_once "db/koneksi.php"; ?>
<div class="row">
  <div class="col-md-8">

    <?php if (isset($_GET['info'])) : ?>
      <?php if ($_GET['info'] == "info") : ?>
        <div class="alert alert-info alert-dismissible fade show">
          <strong>Info!</strong> Tamnbah data berhasil.
        </div>
      <?php endif ?>
      <?php if ($_GET['info'] == "delete") : ?>
        <div class="alert alert-warning alert-dismissible fade show">
          <strong>Info!</strong> hapus data berhasil.
        </div>
      <?php endif ?>
    <?php endif ?>

    <div class="card m-4 p-2">
      <div class="card-header ">
        List Tamu Datang
        <a href="index.php?halaman=bukutamu-add">
          <button class="btn btn-success">
            Tambah data Tamu
          </button>
        </a>
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Tamu</th>
              <th>Alamat Tamu</th>
              <th>No tlp</th>
              <th>Pesan Tamu</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $sql = "SELECT * FROM tb_bukutamu"; ?>
            <?php $result = $koneksi->query($sql); ?>
            <?php while ($data = $result->fetch_assoc()) : ?>
              <tr>
                <td><?php echo $data["id"] ?></td>
                <td><?php echo $data["nama_tamu"] ?></td>
                <td><?php echo $data["alamat_tamu"] ?></td>
                <td><?php echo $data["notelp_tamu"] ?></td>
                <td><?php echo $data["pesan_tamu"] ?></td>
                <td><?php echo $data["tanggal_bertamu"] ?></td>
                <td>
                  <a href="bukutamuDelete.php?id=<?php echo $data["id"] ?>">Hapus</a> |
                  <a href="index.php?halaman=bukutamu-edit&id=<?php echo $data['id'] ?>">Edit</a>
                </td>
              </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>