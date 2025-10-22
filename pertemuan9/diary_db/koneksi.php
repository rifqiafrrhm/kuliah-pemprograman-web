<?php
$koneksi = mysqli_connect("localhost", "root", "", "diary_db");

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
