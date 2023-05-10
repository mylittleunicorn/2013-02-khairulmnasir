<?php

$koneksi = new mysqli("localhost", "root", "", "2013-01-khairulmnasir-bukutamu");

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
