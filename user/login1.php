<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Pembayaran</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="login1.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="container1">
        <img height="20%" width="20%" src="images/DDNA_STORE.png" alt="logo" />
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="bx bx-home"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"><i class='bx bx-info-circle'></i>About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><i class='bx bx-message-rounded-dots'></i>Contact</a>
          </li>
          </ul>
      </div>
    </nav>

    <div class="login-card">
        <h2>Login</h2>
        <h3>Enter your credentials</h3>

        <form id="loginForm" class="login-form">
            <input type="text" id="username" placeholder="Username">
            <input type="password" id="password" placeholder="Password">
            <a href="#">Forget your password?</a>
            <button type="button" class="btn btn-primary" onclick="login()">
              Login
            </button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
      function login() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Ambil informasi dari penyimpanan lokal (localStorage)
        var storedPassword = localStorage.getItem(username);

        if (storedPassword === password) {
          alert("Login berhasil!");
          window.location.href = "buy.php";
        } else {
          alert("Katasandi Anda salah. Silakan coba lagi.");
        }

        // Reset the form
        document.getElementById("loginForm").reset();
      }
    </script>
  </body>
</html>
