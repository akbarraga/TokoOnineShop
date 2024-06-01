<?php
require 'register.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="daftar.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <img height="20%" width="20%" src="images/DDNA_STORE.png" alt="logo" />
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
            <a class="nav-link" href="contact.php"><i class='bx bx-message-rounded-dots'></i>Contact</a>
          </li>
          <li class="nav-login">
              <button class="login-btn" onclick="window.location.href='signin.php'"><i class='bx bx-log-in'></i>login</button>
          </li>
          </ul>
      </div>
    </nav>

    <div class="background">
      <div class="form-container">
        <h1>Formulir Pendaftaran</h1>
        <p>Daftar dahulu agar bisa melihat produk kami.</p>
        <form id="registrationForm" class="input-container" method="POST">
          <div class="label-input">
            <label for="regUsername">Username:</label>
            <input type="text" id="regUsername" class="short-input" required />
          </div>
          <div class="label-input">
            <label for="regEmail">Email:</label>
            <input type="text" id="regEmail" class="short-input" required />
          </div>
          <div class="label-input">
            <label for="regPassword">Password:</label>
            <input
              type="password"
              id="regPassword"
              class="short-input"
              required
            />
          </div>
          <button type="button" onclick="register()">Daftar</button>
        </form>
      </div>
    </div>

    <script>
      function register() {
        var regEmail = document.getElementById("regEmail").value;
        var regUsername = document.getElementById("regUsername").value;
        var regPassword = document.getElementById("regPassword").value;

        // Cek apakah data pengguna sudah tersimpan
        var storedPassword = localStorage.getItem(regUsername);

        if (storedPassword === regPassword) {
          alert("Anda sudah terdaftar!");
          window.location.href = "produk.php";
        } else {
          // Jika pengguna belum terdaftar, simpan informasi pendaftaran ke penyimpanan lokal
          localStorage.setItem(regUsername, regPassword);
          alert("Pendaftaran berhasil!");
          window.location.href = "produk.php";
        }
      }
    </script>
    <script src="daftar.js"></script>
  </body>
</html>