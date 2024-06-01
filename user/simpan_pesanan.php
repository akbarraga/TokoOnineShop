<?php
require 'koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pastikan untuk mendapatkan nilai dari form dengan benar
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $produk = $_POST['produk'];
    $kapasitas = $_POST['kapasitas'];
    $alamat = $_POST['alamat'];
    $ewallet = $_POST['ewallet'];
    $bank = $_POST['bank'];

    // Siapkan dan jalankan pernyataan SQL untuk menyimpan data
    $stmt = $conn->prepare("INSERT INTO orders (nama, email, produk, kapasitas, alamat, ewallet, bank) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nama, $email, $produk, $kapasitas, $alamat, $ewallet, $bank);

    // Periksa apakah pernyataan SQL berhasil dieksekusi
    if ($stmt->execute()) {
        // Redirect ke halaman beranda atau halaman lain jika diperlukan
        header("Location: index.php");
        exit();
    } else {
        // Tampilkan pesan kesalahan jika ada masalah saat menyimpan data
        echo "Error: " . $stmt->error;
    }

    // Tutup pernyataan
    $stmt->close();
} else {
    // Tampilkan pesan jika metode permintaan tidak valid
    echo "Invalid request method.";
}

// Tutup koneksi ke database
$conn->close();
?>
