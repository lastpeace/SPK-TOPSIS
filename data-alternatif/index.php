<?php
$conn = new mysqli('localhost', 'root', '', 'spk_topsis_saw');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPK TOPSIS SAW - Data Alternatif</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="..\data-alternatif\styles.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <style>
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
  <main id="main-content">
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
    <h2>Data Alternatif</h2>
    <div class="card mb-3">
      <div class="card-header">Tambah Data Alternatif</div>
      <div class="card-body">
        <form id="dataAlternatifForm" action="index.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="namaPeserta">Nama Peserta</label>
              <input type="text" class="form-control" id="namaPeserta" name="namaPeserta" maxlength="50" required>
            </div>
            <div class="form-group col-md-6">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" maxlength="100" required>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">Tambah Data Penilaian</div>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="penghasilan">Penghasilan orang tua (Gabungan)</label>
                  <select id="penghasilan" class="form-control" name="penghasilan" required>
                    <option value="">Pilih</option>
                    <option value="5">Kurang dari 1 juta</option>
                    <option value="4">1 - 3 juta</option>
                    <option value="3">3 - 5 juta</option>
                    <option value="2">5 - 10 juta</option>
                    <option value="1">Lebih dari 10 juta</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="kepemilikanRumah">Kepemilikan Rumah</label>
                  <select id="kepemilikanRumah" class="form-control" name="kepemilikanRumah" required>
                    <option value="">Pilih</option>
                    <option value="1">Milik Sendiri</option>
                    <option value="2">Sewa</option>
                    <option value="3">Tinggal Bersama Saudara</option>
                    <option value="4">Tidak Punya</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="tanggungan">Tanggungan</label>
                  <select id="tanggungan" class="form-control" name="tanggungan" required>
                    <option value="">Pilih</option>
                    <option value="1">1 orang</option>
                    <option value="2">2 orang</option>
                    <option value="3">3 orang</option>
                    <option value="4">Lebih dari 3 orang</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="ipk">IPK</label>
                  <input type="number" class="form-control" id="ipk" name="ipk" step="0.01" max="4" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="kendaraan">Kendaraan</label>
                  <select id="kendaraan" class="form-control" name="kendaraan" required>
                    <option value="">Pilih</option>
                    <option value="6">Tidak punya kendaraan</option>
                    <option value="5">1 motor</option>
                    <option value="4">Lebih dari 1 motor</option>
                    <option value="3">1 mobil</option>
                    <option value="2">Lebih dari satu mobil</option>
                    <option value="1">Punya Keduanya</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <button type="submit" class="btn btn-save">Save</button>
                  <button type="reset" class="btn btn-reset">Reset</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
  </div>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaPeserta = $_POST['namaPeserta'];
    $alamat = $_POST['alamat'];
    $penghasilan = $_POST['penghasilan'];
    $kepemilikanRumah = $_POST['kepemilikanRumah'];
    $tanggungan = $_POST['tanggungan'];
    $ipk = $_POST['ipk'];
    $kendaraan = $_POST['kendaraan'];

    $sql = "INSERT INTO alternatives (namaPeserta, alamat, penghasilan, kepemilikanRumah, tanggungan, ipk, kendaraan)
    VALUES ('$namaPeserta', '$alamat', $penghasilan, '$kepemilikanRumah', $tanggungan, $ipk, $kendaraan)";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }

  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>