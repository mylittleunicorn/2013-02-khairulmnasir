<?php
include "db/koneksi.php";
$id = $_GET["id"];

$delete = $koneksi->query("DELETE FROM tb_bukutamu WHERE id='$id'");

if ($delete) {
  header("location:index.php?halaman=bukutamu-list&info=delete");
}
