<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SPK TOPSIS SAW</title>
  <link rel="stylesheet" href="../css/SPK.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
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
      <img class="logo-img" src="../assets/logo (3).png" />
      <span>SPK TOPSIS SAW</span>
    </div>
    <ul class="nav">
      <li class="nav-item active">
        <a href="../Dashboard/Dashboard.php">
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
      <div class="user-profile" id="user-profile">
        <span>Admin</span>
        <img src="../assets/profil.png" alt="Admin Avatar" />
        <!-- Dropdown menu -->
        <div class="dropdown-menu" id="dropdown-menu">
          <a href="#" class="dropdown-item" id="logout">Logout</a>
        </div>
      </div>
    </div>
    <main id="main-content">
      <h1>Daftar Data Kriteria</h1>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kriteria</th>
            <th>Tipe</th>
            <th>Bobot</th>
            <th>Urutan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Pendapatan Orang Tua</td>
            <td>Cost</td>
            <td>0.3</td>
            <td>1</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Tanggungan Orang Tua</td>
            <td>Benefit</td>
            <td>0.2</td>
            <td>2</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Aset</td>
            <td>Benefit</td>
            <td>0.2</td>
            <td>3</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Kepemilikan Rumah</td>
            <td>Benefit</td>
            <td>0.15</td>
            <td>4</td>
          </tr>
          <tr>
            <td>5</td>
            <td>IPK</td>
            <td>Benefit</td>
            <td>0.15</td>
            <td>5</td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
  <script src="scripts.js"></script>
</body>

</html>