<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>My Simple Diary</title>
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
    <h2>📔 My Simple Diary</h2>
    <form action="tambah.php" method="post">
      <textarea name="isi" placeholder="Tulis catatan harianmu..."></textarea><br>
      <button type="submit">Simpan</button>
    </form>

    <hr>

    <h3>History catatan :</h3>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM diary ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($query)) {
      echo "<div class='note'>
              <b>{$row['tanggal']}</b><br>
              {$row['isi']}<br>
              <a href='hapus.php?id={$row['id']}'>Hapus</a>
            </div>";
    }
    ?>
  </div>
</body>
</html>
