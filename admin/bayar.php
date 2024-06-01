<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DDNA STORE - PEMBAYARAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="bayar.css"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand"><img height="20%" width="60%" src="images/DDNA_STORE.png" alt="Logo"></a>
    </div>
</nav>

<section id="PaymentOptions" class="PaymentOptions">
    <div class="container">
        <h2>Metode Pembayaran</h2>
        <p>Silahkan pilih metode pembayaran Anda:</p>

        <div class="mb-3">
            <label for="ewalletSelection">PILIH E-WALLET</label>
            <select class="form-control" id="ewalletSelection">
                <option value="-">--</option>
                <option value="DANA">DANA</option>
                <option value="GOPAY">GOPAY</option>
                <option value="SHOPPEPAY">SHOPPEPAY</option>
                <option value="OVO">OVO</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="bankSelection">PILIH BANK</label>
            <select class="form-control" id="bankSelection">
                <option value="-">--</option>
                <option value="BANK BRI">BANK BRI</option>
                <option value="BANK MANDIRI">BANK MANDIRI</option>
                <option value="BANK BCA">BANK BCA</option>
                <option value="BANK BNI">BANK BNI</option>
            </select>
        </div>
        
        <div class="mb-4">
            <button type="button" class="btn btn-primary" onclick="processPayment()">Bayar Sekarang</button>
        </div>
    </div>
</section>

<script>
    function processPayment() {
        var selectedEWallet = document.getElementById("ewalletSelection").value;
        var selectedBank = document.getElementById("bankSelection").value;

        var selectedPaymentMethod = selectedEWallet !== "-" ? selectedEWallet : selectedBank !== "-" ? selectedBank : null;

        if (selectedPaymentMethod) {
            alert("Pembayaran telah selesai! Metode: " + selectedPaymentMethod);
            window.location.href = "produk.php";
        } else {
            alert("Harap pilih metode pembayaran.");
        }
    }
</script>

</body>
</html>
