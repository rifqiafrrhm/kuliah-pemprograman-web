<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM diary WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $isi = $_POST['isi'];
    $query = "UPDATE diary SET isi='$isi', tanggal=NOW() WHERE id=$id";
    mysqli_query($koneksi, $query);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
    <style>
        body { font-family: Arial; background: #0F0E0E; }
        .container { width: 600px; margin: 50px auto; background: #44444E; padding: 20px; border-radius: 10px; }
        textarea { background-color: #44444E; width: 100%; height: 80px; }
        .note { background: #37353E; padding: 10px; border-radius: 8px; margin-top: 10px; }
        a { color: red; text-decoration: none; }
        button { background: #00ff15ff; border: none; padding: 10px 20px; border-radius: 5px; color: #fff; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Catatan</h2>
        <form method="post">
            <textarea name="isi" required><?php echo $data['isi']; ?></textarea><br><br>
            <button type="submit" name="update">Simpan</button>
        </form>
        <br>
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>
