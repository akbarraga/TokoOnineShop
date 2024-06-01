<?php
$mysqli = new mysqli("localhost", "root", "", "co");

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM orders";
$result = $mysqli->query($sql);

// Periksa jika kueri berhasil dijalankan
if ($result === false) {
    die("Error dalam menjalankan kueri: " . $mysqli->error);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styless.css" />
    <title>ADMIN DDNA STORE</title>
  </head>

  <style>
      
      .profile {
        display: flex;
        align-items: center;
      }
      .profile .info {
        margin-right: 10px;
      }
      .profile-photo img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }
      nav .profile {
        display: flex;
        align-items: center;
        gap: 10px;
      }
      
      .profile .info p,
      .profile .info small {
        color: #333;
      }

      .dark-mode .profile .info p,
      .dark-mode .profile .info small {
        color: #fff; 
      }

      
    </style>

  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <a href="#" class="logo">
        <i class="bx bx-store"></i>
        <div class="logo-name"><span>DDNA</span>STORE</div>
      </a>
      <ul class="side-menu">
        <li>
          <a href="index.php"><i class='bx bx-home'></i>Home</a>
        </li>
        <li>
          <a href="dashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
        </li>
        <li class="active">
          <a href="#analisis"><i class="bx bx-analyse"></i>Analisis</a>
        </li>
        <li>
          <a href="orders.php"><i class='bx bx-package'></i>Order</a>
        </li>
        <li>
          <a href="login.php"><i class="bx bx-group"></i>Login</a>
        </li>
        <li>
          <a href="contacts.php"><i class='bx bx-envelope'></i>Message</a>
        </li>
        <li>
          <a href="stok.php"><i class='bx bx-message-rounded-dots'></i>Stok</a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="logout.php" class="logout">
            <i class="bx bx-log-out-circle"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
      <!-- Navbar -->
      <nav>
        <i class="bx bx-menu"></i>
        <form action="index.php" method="GET" class="search-form">
          <div class="form-input">
           <input type="search" name="search" placeholder="Search..." />
            <button class="search-btn" type="submit" id="cari">
            <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <input type="checkbox" id="theme-toggle" hidden />
        <label for="theme-toggle" class="theme-toggle"></label>
        <a href="#" class="notif">
          <i class="bx bx-bell"></i>
          <span class="count">12</span>
        </a>
        <div class="profile">
           <div class="info">
              <p>Hai, <b>Akbar</b></p>
                <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
                <img src="images/profil 3.jpg">
            </div>
        </div>
      </nav>

      <!-- End of Navbar -->

      <main>
        <div class="header">
          <div class="left">
            <h1>ADMIN DDNA_STORE</h1>
            <ul class="breadcrumb">
              <li><a href="#"> Analytics </a></li>
              /
              <li><a href="#" class="active">Store</a></li>
            </ul>
          </div>
          <a href="#" class="report1">
            <img src="images/DDNA_STORE.png" alt="">
          </a>
        </div>

        <!-- Insights -->
        <ul class="insights" id="analisis">
          <li>
            <i class="bx bx-calendar-check"></i>
            <span class="info">
              <h3>1,074</h3>
              <p>Pesanan Terselesaikan</p>
            </span>
          </li>
          <li>
            <i class="bx bx-show-alt"></i>
            <span class="info">
              <h3>3,944</h3>
              <p>Pengunjung</p>
            </span>
          </li>
          <li>
            <i class="bx bx-line-chart"></i>
            <span class="info">
              <h3>1,500</h3>
              <p>Stok semua barang</p>
            </span>
          </li>
          <li>
            <i class="bx bx-dollar-circle"></i>
            <span class="info">
              <h3>$6,742</h3>
              <p>Total Penjualan</p>
            </span>
          </li>
        </ul>
        <!-- End of Insights -->

        <div class="bottom-data" id="pesanan">
            <div class="orders">
                <div class="header">
                    <i class="bx bx-receipt"></i>
                    <h3>Pesanan Terbaru</h3>
                    <i class="bx bx-filter"></i>
                    <i class="bx bx-search"></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Produk</th>
                            <th>Alamat</th>
                            <th>E-Wallet</th>
                            <th>Bank</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['produk']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['ewallet']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['bank']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tanggal']) . "</td>";
                        echo "</tr>";
                        }
                      ?>
                    </tbody>

                </table>
            </div>
        </div>
        </div>
      </main>
    </div>
    
<?php
// Bebaskan hasil
$result->free();

// Tutup koneksi
$mysqli->close();
?>

    <script src="index.js"></script>
  </body>
</html>