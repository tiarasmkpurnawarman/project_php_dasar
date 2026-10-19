<?php 

    // cek apakah ada data di $_POST atau tidak
    if(
        !isset($_POST["nama"]) ||
        !isset($_POST["kelas"]) ||
        !isset($_POST["pesan"])
    ) {
        // redirect ke halaman form
        header("Location: form_pesan.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan | Project PHP Dasar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-isi">
            <span class="brand">Project PHP Dasar</span>
        </div>
    </header>

    <div class="container form-container">
        <h2>Pesan Berhasil Dikirim</h2>
        <p>Terima kasih, <?= htmlspecialchars($_POST["nama"]) ?>.</p>

        <div class="hasil-pesan">
            <p><strong>Nama :</strong> <?= htmlspecialchars($_POST["nama"]) ?></p>
            <p><strong>Kelas :</strong> <?= htmlspecialchars($_POST["kelas"]) ?></p>
            <p><strong>Pesan / Kesan :</strong></p>
            <p><?= nl2br(htmlspecialchars($_POST["pesan"])) ?></p>
        </div>

        <a class="tombol" href="index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
