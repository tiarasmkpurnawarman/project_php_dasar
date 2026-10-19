<?php 

    // data mahasiswa (array 2 dimensi yang berisi array associative)
    $mahasiswa = [
        [
            "nim" => "25001",
            "nama" => "Hirara",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "hirara@upi.edu",
            "nilai" => 90
        ],
        [
            "nim" => "25002",
            "nama" => "Pharsa",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "parsa@upi.edu",
            "nilai" => 73
        ],
        [
            "nim" => "25003",
            "nama" => "Vexana",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "v3xa@upi.edu",
            "nilai" => 65
        ],
        [
            "nim" => "25004",
            "nama" => "Zetian",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "zetian@upi.edu",
            "nilai" => 98
        ],
        [
            "nim" => "25005",
            "nama" => "Layla",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "layla@upi.edu",
            "nilai" => 65
        ]
    ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa | Project PHP Dasar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-isi">
            <span class="brand">Project PHP Dasar</span>
        </div>
    </header>

    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <p class="pengantar">Data nilai mahasiswa semester ini.</p>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($mahasiswa as $data): ?>

                    <?php 
                        // menentukan grade berdasarkan nilai
                        if ($data["nilai"] >= 80) {
                            $grade = "A";
                        } elseif ($data["nilai"] >= 70) {
                            $grade = "B";
                        } elseif ($data["nilai"] >= 60) {
                            $grade = "C";
                        } else {
                            $grade = "D";
                        }

                        // menentukan status kelulusan berdasarkan nilai
                        if ($data["nilai"] >= 70) {
                            $status = "Lulus";
                            $kelas_status = "lulus";
                        } else {
                            $status = "Tidak Lulus";
                            $kelas_status = "tidak-lulus";
                        }
                    ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= htmlspecialchars($data["nim"]) ?></td>
                        <td><?= htmlspecialchars($data["nama"]) ?></td>
                        <td><?= htmlspecialchars($data["jurusan"]) ?></td>
                        <td><?= $data["nilai"] ?></td>
                        <td><span class="badge grade"><?= $grade ?></span></td>
                        <td><span class="badge <?= $kelas_status ?>"><?= $status ?></span></td>
                        <td>
                            <!-- mengirim data ke detail.php menggunakan method GET -->
                            <a class="tombol kecil" href="detail.php?nim=<?= urlencode($data["nim"]) ?>&nama=<?= urlencode($data["nama"]) ?>&jurusan=<?= urlencode($data["jurusan"]) ?>&email=<?= urlencode($data["email"]) ?>&nilai=<?= urlencode($data["nilai"]) ?>&grade=<?= urlencode($grade) ?>&status=<?= urlencode($status) ?>">Lihat Detail</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach ?>
            </tbody>
        </table>

        <a class="tombol" href="form_pesan.php">Isi Form Pesan</a>
    </div>
</body>
</html>
