<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK TOPSIS SAW</title>
    <link rel="stylesheet" href="../css/SPK.css">
    <link rel="stylesheet" href="../css/penilai.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img class="logo-img" src="../assets/logo (3).png" alt="Logo">
            <span>SPK TOPSIS SAW</span>
        </div>
        <ul class="nav">
            <li class="nav-item active">
              <a href="#">
                <span class="material-icons">dashboard</span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="../data-kriteria/kriteria.php">
                <span class="material-icons">assessment</span>
                <span>Data Kriteria</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="../data-alternatif/index.php">
                <span class="material-icons">group</span>
                <span>Data Alternatif</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="../Hasil/Hasil.php">
                <span class="material-icons">assignment</span>
                <span>Data Hasil Penilaian</span>
              </a>
            </li>
          </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <div class="user-profile">
                <span>Admin</span>
                <img src="../assets/profil.png" alt="Admin Avatar">
            </div>
        </div>
        <h1>Daftar Mahasiswa</h1>
        <div>
            <button class="tombol-cetak">Cetak Hasil</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Pendapatan Orang Tua</th>
                    <th>Tanggungan</th>
                    <th>Kepemilikan Tempat Tinggal</th>
                    <th>IPK</th>
                    <th>Aset</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <button class="tombol-lebih-banyak" onclick="tampilkanLebihBanyak()">Lebih Banyak</button>
        <div class="data-lebih-banyak">
    </div>
    <h1>Bobot Preferensi (W)</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Kriteria</th>
                    <th>Type</th>
                    <th>Bobot</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pendapatan Orang Tua</td>
                    <td>Cost</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Tanggungan</td>
                    <td>Benefit</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Aset</td>
                    <td>Benefit</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Kepemilikan Tempat Tinggal</td>
                    <td>Benefit</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>Benefit</td>
                    <td>5</td>
                </tr>
            </thead>
            <tbody>
        </table>
        <button class="tombol-hitung">Hitung</button>
    </div>
    <script>
        function tampilkanLebihBanyak() {
            var lebihBanyak = document.querySelector('.data-lebih-banyak');
            var tombol = document.querySelector('.tombol-lebih-banyak');
            if (lebihBanyak.style.display === "none") {
                lebihBanyak.style.display = "block";
                tombol.textContent = "Sembunyikan";
            } else {
                lebihBanyak.style.display = "none";
                tombol.textContent = "Lebih Banyak";
            }
        }
    </script>
</body>
</html>
</body>
</html>
