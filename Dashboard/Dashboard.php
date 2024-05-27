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
    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-menu a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-menu a:hover {
      background-color: #f1f1f1;
    }

    .dashboard .card {
      width: 200px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      background-color: #f8f9fa;
      transition: background-color 0.3s, transform 0.3s;
      color: black;
      /* Set text color to black */
    }

    .dashboard .card a {
      text-decoration: none;
      /* Ensure links have no underline */
      color: inherit;
      /* Inherit text color */
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .dashboard .card-icon {
      font-size: 40px;
      margin-bottom: 10px;
      color: #f44336;
    }

    .dashboard .card:hover {
      background-color: #e9ecef;
      transform: translateY(-5px);
    }

    .nav a {
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
    }

    .nav a:hover {
      color: lightgray;
      /* Optional: Add a hover effect if desired */
    }

    .nav-item {
      margin-bottom: 10px;
    }

    .card a {
      color: white;
      text-decoration: none;
    }

    .card a:hover {
      color: lightgray;
      /* Optional: Add a hover effect if desired */
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
      <div class="user-profile" id="user-profile">
        <span>Admin</span>
        <img src="../assets/profil.png" alt="Admin Avatar" />
        <!-- Dropdown menu -->
        <div class="dropdown-menu" id="dropdown-menu">
          <a href="#" class="dropdown-item" id="logout">Logout</a>
        </div>
      </div>
    </div>
    <div class="Dashboard">
      <h1>Dashboard</h1>
    </div>
    <div class="dashboard">
      <div class="card">
        <a href="../data-kriteria/kriteria.php">
          <div class="card-icon">
            <span class="material-icons">assessment</span>
          </div>
          <div>Data Kriteria</div>
        </a>
      </div>
      <div class="card">
        <a href="../data-alternatif/index.php">
          <div class="card-icon">
            <span class="material-icons">group</span>
          </div>
          <div>Data Alternatif</div>
        </a>
      </div>
      <div class="card">
        <a href="../Hasil/Hasil.php">
          <div class="card-icon">
            <span class="material-icons">assignment</span>
          </div>
          <div>Data Hasil Penilaian</div>
        </a>
      </div>
    </div>
  </div>
  <!-- JavaScript untuk logout -->
  <script src="scripts.js"></script>
</body>

</html>