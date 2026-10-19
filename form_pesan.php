<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa | Project PHP Dasar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-isi">
            <span class="brand">Project PHP Dasar</span>
        </div>
    </header>

    <div class="container form-container">
        <h2>Form Pesan Mahasiswa</h2>
        <p class="pengantar">Silakan isi pesan atau kesan kamu.</p>

        <!-- mengirim data ke hasil_pesan.php menggunakan method POST -->
        <form action="hasil_pesan.php" method="POST">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" required>

            <label for="pesan">Pesan / Kesan</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>

            <button class="tombol" type="submit" name="tombol_kirim">Kirim Pesan</button>
            <a class="tombol tombol-kembali" href="index.php">Kembali</a>
        </form>
    </div>
</body>
</html>
