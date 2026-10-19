<?php 

    // cek apakah ada data di $_GET atau tidak
    if(
        !isset($_GET["nim"]) ||
        !isset($_GET["nama"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["email"]) ||
        !isset($_GET["nilai"]) ||
        !isset($_GET["grade"]) ||
        !isset($_GET["status"])
    ) {
        // redirect ke halaman utama
        header("Location: index.php");
        exit;
    }

    // menentukan warna badge status
    if ($_GET["status"] == "Lulus") {
        $kelas_status = "lulus";
    } else {
        $kelas_status = "tidak-lulus";
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa | Project PHP Dasar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-isi">
            <span class="brand">Project PHP Dasar</span>
        </div>
    </header>

    <div class="container form-container">
        <h2>Detail Mahasiswa</h2>

        <table class="tabel-detail">
            <tr>
                <th>NIM</th>
                <td><?= htmlspecialchars($_GET["nim"]) ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= htmlspecialchars($_GET["nama"]) ?></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><?= htmlspecialchars($_GET["jurusan"]) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($_GET["email"]) ?></td>
            </tr>
            <tr>
                <th>Nilai</th>
                <td><?= htmlspecialchars($_GET["nilai"]) ?></td>
            </tr>
            <tr>
                <th>Grade</th>
                <td><span class="badge grade"><?= htmlspecialchars($_GET["grade"]) ?></span></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><span class="badge <?= $kelas_status ?>"><?= htmlspecialchars($_GET["status"]) ?></span></td>
            </tr>
        </table>

        <a class="tombol" href="index.php">Kembali</a>
    </div>
</body>
</html>
