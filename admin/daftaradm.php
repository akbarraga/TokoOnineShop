<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="adm.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <img height="20%" width="20%" src="images/DDNA_STORE.png" alt="logo" />
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Beranda</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="background">
      <div class="form-container">
        <h1>Formulir Pendaftaran</h1>
        <p>Admin diharuskan daftar</p>
        <form id="registrationForm" class="input-container">
          <div class="label-input">
            <label for="regUsername">Username:</label>
            <input type="text" id="regUsername" class="short-input" required />
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
        var regUsername = document.getElementById("regUsername").value;
        var regPassword = document.getElementById("regPassword").value;

        // Cek apakah data pengguna sudah tersimpan
        var storedPassword = localStorage.getItem(regUsername);

        if (storedPassword === regPassword) {
          alert("Anda sudah terdaftar!");
          window.location.href = "dashboard.php";
        } else {
          // Jika pengguna belum terdaftar, simpan informasi pendaftaran ke penyimpanan lokal
          localStorage.setItem(regUsername, regPassword);
          alert("Pendaftaran berhasil!");
          window.location.href = "admin.php";
        }
      }
    </script>
  </body>
</html>
