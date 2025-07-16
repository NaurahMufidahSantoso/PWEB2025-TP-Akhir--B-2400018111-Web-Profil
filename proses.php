<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars(trim($_POST['nama']));
  $pesan = htmlspecialchars(trim($_POST['pesan']));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pesan Masuk</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body class="result-page">
  <div class="result-box">
    <?php if (empty($nama) || empty($pesan)) { ?>
      <h2>Data tidak lengkap</h2>
      <p>Silakan isi nama dan pesan terlebih dahulu.</p>
    <?php } elseif (strlen($pesan) < 10) { ?>
      <h2>Pesan Terlalu Pendek</h2>
      <p>Pesan minimal harus 10 karakter.</p>
    <?php } else { ?>
      <h2>YEAYYY Pesan Terkirim</h2>
      <p><strong>Nama:</strong> <?= $nama ?></p>
      <p><strong>Pesan:</strong> <?= $pesan ?></p>
    <?php } ?>
    <a class="button" href="index.html">Kembali ke Halaman</a>
  </div>
</body>
</html>