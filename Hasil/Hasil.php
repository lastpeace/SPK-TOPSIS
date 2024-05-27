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
    </header>
    <div class="Data">
      <h2> Data Hasil Penilaian </h2>
    </div>
    <main id="main-content">
      <h1>Hasil Penilaian</h1>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "spk_topsis_saw";

      // Create connection
      $koneksi = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
      }

      // Fetch data from the database
      $sql = "SELECT * FROM alternatives";
      $result = $koneksi->query($sql);

      $data = [];
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $data[] = [
            'nama' => $row['namaPeserta'],
            'penghasilan' => $row['penghasilan'],
            'kepemilikanRumah' => $row['kepemilikanRumah'],
            'tanggungan' => $row['tanggungan'],
            'ipk' => $row['ipk'],
            'kendaraan' => $row['kendaraan'],
          ];
        }
      }

      // Define weights for each criterion
      $weights = [
        'penghasilan' => 0.2,
        'kepemilikanRumah' => 0.2,
        'tanggungan' => 0.2,
        'ipk' => 0.2,
        'kendaraan' => 0.2,
      ];

      // Normalize the decision matrix for TOPSIS
      $normalizedDataTopsis = [];
      foreach ($data as $i => $row) {
        foreach ($row as $key => $value) {
          if ($key !== 'nama') {
            $sum = 0;
            foreach ($data as $r) {
              $sum += pow($r[$key], 2);
            }
            if ($sum == 0) {
              echo "Error: Sum of squares for $key is zero. Cannot normalize.\n";
              exit;
            }
            $normalizedDataTopsis[$i][$key] = $value / sqrt($sum);
          } else {
            $normalizedDataTopsis[$i][$key] = $value;
          }
        }
      }

      // Normalize the decision matrix for SAW
      $normalizedDataSaw = [];
      foreach ($data as $i => $row) {
        foreach ($row as $key => $value) {
          if ($key !== 'nama') {
            $maxValue = max(array_column($data, $key));
            if ($maxValue == 0) {
              echo "Error: Maximum value for $key is zero. Cannot normalize.\n";
              exit;
            }
            $normalizedDataSaw[$i][$key] = $value / $maxValue;
          } else {
            $normalizedDataSaw[$i][$key] = $value;
          }
        }
      }

      // Calculate the weighted normalized decision matrix for TOPSIS
      $weightedNormalizedDataTopsis = [];
      foreach ($normalizedDataTopsis as $i => $row) {
        foreach ($row as $key => $value) {
          if ($key !== 'nama') {
            $weightedNormalizedDataTopsis[$i][$key] = $value * $weights[$key];
          } else {
            $weightedNormalizedDataTopsis[$i][$key] = $value;
          }
        }
      }

      // Calculate the weighted normalized decision matrix for SAW
      $weightedNormalizedDataSaw = [];
      foreach ($normalizedDataSaw as $i => $row) {
        foreach ($row as $key => $value) {
          if ($key !== 'nama') {
            $weightedNormalizedDataSaw[$i][$key] = $value * $weights[$key];
          } else {
            $weightedNormalizedDataSaw[$i][$key] = $value;
          }
        }
      }

      // Determine the positive ideal and negative ideal solutions for TOPSIS
      $positiveIdeal = [];
      $negativeIdeal = [];
      foreach ($weights as $key => $weight) {
        $column = array_column($weightedNormalizedDataTopsis, $key);
        $positiveIdeal[$key] = max($column);
        $negativeIdeal[$key] = min($column);
      }

      // Calculate the separation measures for TOPSIS
      $separationPositive = [];
      $separationNegative = [];
      foreach ($weightedNormalizedDataTopsis as $i => $row) {
        $sumPositive = 0;
        $sumNegative = 0;
        foreach ($row as $key => $value) {
          if ($key !== 'nama') {
            $sumPositive += pow($value - $positiveIdeal[$key], 2);
            $sumNegative += pow($value - $negativeIdeal[$key], 2);
          }
        }
        $separationPositive[$i] = sqrt($sumPositive);
        $separationNegative[$i] = sqrt($sumNegative);
      }

      $relativeCloseness = [];
      foreach ($separationPositive as $i => $positive) {
        $negative = $separationNegative[$i];

        // Check if the sum is zero, which is highly unlikely unless data is problematic
        if (($negative + $positive) == 0) {
          // Provide a more meaningful debug message
          echo "Debug: Sum of separation measures for alternative {$data[$i]['nama']} is zero. Negative: $negative, Positive: $positive\n";
          $relativeCloseness[$i] = 0.5; // Assign a default neutral value if this happens
        } else {
          $relativeCloseness[$i] = $negative / ($negative + $positive);
        }
      }

      // Calculate the total score for SAW
      $totalScoresSaw = [];
      foreach ($weightedNormalizedDataSaw as $i => $row) {
        $totalScoresSaw[$i] = array_sum(array_diff_key($row, ['nama' => '']));
      }

      // Normalize the SAW scores
      $maxScoreSaw = max($totalScoresSaw);
      $normalizedScoresSaw = [];
      foreach ($totalScoresSaw as $i => $score) {
        $normalizedScoresSaw[$i] = $score / $maxScoreSaw;
      }

      // Combine TOPSIS and SAW scores
      $combinedScores = [];
      foreach ($relativeCloseness as $i => $score) {
        $combinedScores[$i] = ($score + $normalizedScoresSaw[$i]) / 2;
      }

      // Rank the alternatives based on the combined scores
      array_multisort($combinedScores, SORT_DESC, $data);

      // Display the results
      echo "<h1>Hasil Penilaian Gabungan TOPSIS dan SAW</h1>";
      echo "<table border='1'>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Nilai TOPSIS</th>
    <th>Nilai SAW</th>
    <th>Nilai Gabungan</th>
    <th>Keputusan</th>
    <th>Ranking</th>
</tr>";
      foreach ($data as $i => $row) {
        $decision = ($combinedScores[$i] >= 0.6) ? 'Diterima' : 'Tidak Diterima'; // Penambahan kondisi keputusan
        echo "<tr>
    <td>" . ($i + 1) . "</td>
    <td>" . $row['nama'] . "</td>
    <td>" . $relativeCloseness[$i] . "</td>
    <td>" . $normalizedScoresSaw[$i] . "</td>
    <td>" . $combinedScores[$i] . "</td>
    <td>" . $decision . "</td> 
    <td>" . ($i + 1) . "</td>
</tr>";
      }
      echo "</table>";
      ?>

    </main>
  </div>
</body>

</html>