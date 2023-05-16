<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Buku Tamu Berbasis Web</title>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>

<body>
  <header>
    <h1>Selamat datang di aplikasi buku tamu</h1>
  </header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a href="#" class="navbar-brand">BukuTamu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php?halaman=bukutamu-list" class="nav-link">List Bukutamu</a>
          </li>
          <li class="nav-item">
            <a href="index.php?halaman=admin-list" class="nav-link">List Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section>
    <div class="container">
      <?php
      if (isset($_GET["halaman"])) {
        $halaman = $_GET["halaman"];
        switch ($halaman) {
          case "bukutamu-list":
            include "bukutamuList.php";
            break;
          case "bukutamu-add":
            include "bukutamuAdd.php";
            break;
          case "bukutamu-edit":
            include "bukutamuEdit.php";
            break;
          case "admin-list":
            include "adminList.php";
            break;

          default:
            echo "halaman tidak ditemukan - 404";
            break;
        }
      } else {
        include "home.php";
      }
      ?>
    </div>
  </section>
</body>

</html>