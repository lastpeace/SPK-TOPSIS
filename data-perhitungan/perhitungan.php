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
  <style>
    .nav a,
    .card a {
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
    }

    .nav a:hover,
    .card a:hover {
      color: lightgray;
      /* Optional: Add a hover effect if desired */
    }

    .nav-item,
    .card {
      margin-bottom: 10px;
    }

    .header .dropdown-menu {
      position: absolute;
      top: 100%;
      right: 0;
      background-color: white;
      border: 1px solid #ccc;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      display: none;
      z-index: 1000;
    }

    .header .dropdown-item {
      padding: 10px 20px;
      cursor: pointer;
      display: block;
      text-decoration: none;
      /* Remove underline */
      color: black;
      /* Default text color */
      width: 100%;
      /* Ensure the anchor element takes the full width */
      box-sizing: border-box;
      /* Ensure padding and width are calculated correctly */
    }

    .header .dropdown-item:hover {
      background-color: #f2f2f2;
      text-decoration: none;
      /* Menghapus garis bawah saat hover */
      color: black;
      /* Warna teks saat hover */
    }

    /* Show dropdown menu when active */
    .header .dropdown-menu.active {
      display: block;
    }
  </style>
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
    <h1>Data Mahasiswa</h1>
    <div>
      <button class="tombol-cetak">Cetak Hasil</button>
    </div>
    <table>
      <thead>
        <tr>
          <th>Nama Mahasiswa</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th>Kriteria</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Penghasilan Orang Tua</td>
          <td></td>
        </tr>
        <tr>
          <td>Tanggungan</td>
          <td></td>
        </tr>
        <tr>
          <td>Kendaraan</td>
          <td></td>
        </tr>
        <tr>
          <td>Kepemilikan Rumah</td>
          <td></td>
        </tr>
        <tr>
          <td>IPK</td>
          <td></td>
        </tr>
        <tr>
          <th>Hasil Hitung</th>
          <th></th>
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