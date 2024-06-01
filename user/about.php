<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DDNA STORE</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="about.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand"
          ><img height="20%" width="60%" src="images/DDNA_STORE.png" alt="Logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-login">
          <button class="login-btn" onclick="window.location.href='signin.php'">
            <i class='bx bx-log-in'></i>Login
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="bx bx-home"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produk.php"><i class='bx bx-cart'></i>Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"><i class='bx bx-info-circle'></i>About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><i class='bx bx-envelope'></i>Contact</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="About" class="About">
      <div class="container2">
        <h1 class="display-4">Tentang Kami</h1>
        <p class="lead">
          Tim kami terdiri dari empat orang dalam pembuatan project ini.</p>
        <p class="lead2">Klik
            profil kami dibawah untuk mencari tahu tentang kami
          </p></p>

        <a
          class="profil"
          href="https://www.instagram.com/alwiarasyid12?utm_source=qr&igsh=MTg4ZDJpaDAzMGU5cQ=="
          target="_blank"
        >
          <img src="images/profil 1.jpg" alt="Logo" height="100" />
        </a>

        <a
          class="profil"
          href="https://www.instagram.com/sky456__?igsh=d292YXJseGo3bGpj"
          target="_blank"
        >
          <img src="images/profil 2.jpg" alt="Logo" height="100" />
        </a>

        <a
          class="profil"
          href="https://www.instagram.com/akbrrga_?igsh=MWkyeW41cnNja2ZkNw=="
          target="_blank"
        >
          <img src="images/profil 3.jpg" alt="Logo" height="100" />
        </a>

        <a
          class="profil"
          href="https://www.instagram.com/nopallll009?igsh=OGQ5ZDc2ODk2ZA=="
          target="_blank"
        >
          <img src="images/profil 4.jpg" alt="Logo" height="100" />
        </a>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
