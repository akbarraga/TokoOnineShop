<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cute+Font&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cute+Font&family=Honk&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="img-fluid" src="images/DDNA_STORE.png" alt="Logo" />
        </a>
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
        <div class="collapse navbar-collapse" id="navbarNav">
        <div class="nav-center">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produk.php">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-login">
              <button class="login-btn" onclick="window.location.href='signin.php'">Login</button>
          </li>
        </ul>
      </div>

        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
      <div class="container-fluid text-banner">
        <h1 class="display-4" style="margin-top: -150px">
          WELCOME TO DDNA STORE
        </h1>
        <div style="margin-top: 10px; font-size: 2.5em">
          <p class="lead">Enjoy the shopping</p>
        </div>
        <a href="produk.php"class="btn btn-primary btn-lg"style="font-size: 0.8em">View Product</a>
      </div>
    </section>

    <footer class="footer">
      <div class="container-fluid text-center">
        <p>&copy; 2024 RPL TWO</p>
      </div>
    </footer>

    <div class="blank"></div>

    <div class="container second">
      <div class="card">
        <div class="info">
          <img src="images/iPhone 11.jpg" />
          <h3>Produk</h3>
          <p>Produk apple kami dengan berbagai type</p>
        </div>
        <a href="produk.php">Lihat</a>
      </div>
      <div class="card">
        <div class="info">
          <img src="images/bgabout.jpg" />
          <h3>Team</h3>
          <p>Kami mempunyai team terdiri dari 4 orang</p>
        </div>
        <a href="about.php">Lihat</a>
      </div>
      <div class="card">
        <div class="info">
          <img src="images/download.jpeg" />
          <h3>Contact Us</h3>
          <p>Ingin memberi saran dan keluhan?, hubungi kami saja</p>
        </div>
        <a href="contact.php">hubungi</a>
      </div>
    </div>

    <div class="blank-2">
      <div class="footer">
        <div class="column">
          <h3>Services</h3>
          <ul>
            <li><a href="#">Email Marketing</a></li>
            <li><a href="#">Campaigns</a></li>
            <li><a href="#">Branding</a></li>
          </ul>
        </div>
        <div class="column">
          <h3>About</h3>
          <ul>
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Benifits</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="column">
          <h3>Legal</h3>
          <ul>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
          </ul>
        </div>
        <div class="column">
          <h3>Overview</h3>
          <ul>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Bloggers</a></li>
          </ul>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
