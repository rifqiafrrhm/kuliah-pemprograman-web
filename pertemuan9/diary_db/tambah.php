<?php
date_default_timezone_set('Asia/Makassar');
?>
<?php
include "koneksi.php";

$isi = $_POST['isi'];
$tanggal = date("Y-m-d H:i:s");

mysqli_query($koneksi, "INSERT INTO diary (tanggal, isi) VALUES ('$tanggal', '$isi')");
header("Location: index.php");
?>
