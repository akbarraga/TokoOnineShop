<?php
$mysqli = new mysqli("localhost", "root", "", "co");

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM product_info";
$result = $mysqli->query($sql);

// Periksa jika kueri berhasil dijalankan
if ($result === false) {
    die("Error dalam menjalankan kueri: " . $mysqli->error);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="buy.css">
</head>
<body>
<section id="PaymentOptions" class="PaymentOptions">
    <div class="container">
        <h2>Metode Pembayaran</h2>
        <p>Silahkan pilih metode pembayaran Anda:</p>
        <form action="simpan_pesanan.php" method="post">
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
    <label for="produk">Produk</label>
    <select class="form-control" id="produk" name="produk" required>
        <option value="-">Pilih produk anda...</option>
        <option value="Iphone 11">Iphone 11</option>
        <option value="Iphone 11 pro">Iphone 11 pro</option>
        <option value="Iphone 11 promax">Iphone 11 promax</option>
        <option value="Iphone 12 promax">Iphone 12 promax</option>
        <option value="Iphone 13 pro">Iphone 13 pro</option>
        <option value="Iphone 13 promax">Iphone 13 promax</option>
        <option value="Iphone 14 ">Iphone 14 </option>
        <option value="Iphone 14 promax">Iphone 14 promax</option>
        <option value="Iphone 15 ">Iphone 15 </option>
    </select>
    <select class="form-control" id="kapasitas" name="kapasitas" required>
        <option value="-">Pilih kapasitas...</option>
        <option value="64gb">64gb</option>
        <option value="128gb">128gb</option>
        <option value="256gb">256gb</option>
        <option value="512gb">512gb</option>
        <option value="1tb">1tb</option>
    </select>
</div>

            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="mb-3">
                <label for="ewalletSelection">PILIH E-WALLET</label>
                <select class="form-control" id="ewalletSelection" name="ewallet" required>
                    <option value="-">--</option>
                    <option value="DANA">DANA</option>
                    <option value="GOPAY">GOPAY</option>
                    <option value="SHOPPEPAY">SHOPPEPAY</option>
                    <option value="OVO">OVO</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="bankSelection">PILIH BANK</label>
                <select class="form-control" id="bankSelection" name="bank" required>
                    <option value="-">--</option>
                    <option value="BANK BRI">BANK BRI</option>
                    <option value="BANK MANDIRI">BANK MANDIRI</option>
                    <option value="BANK BCA">BANK BCA</option>
                    <option value="BANK BNI">BANK BNI</option>
                </select>
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary" name="beli">Bayar Sekarang</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>
