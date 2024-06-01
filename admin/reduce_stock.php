<?php
include 'koneksi.php';

function update_stock($conn, $item_name, $quantity, $operation) {
    // Get the current stock
    $sql = "SELECT stok FROM barang WHERE nama_barang = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }
    $stmt->bind_param("s", $item_name);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_stock = $row['stok'];
        $stmt->close(); // Close the statement before reusing the variable
        
        if ($operation === 'add') {
            // Increase the stock
            $new_stock = $current_stock + $quantity;
        } elseif ($operation === 'subtract') {
            // Check if the stock is enough
            if ($current_stock >= $quantity) {
                // Reduce the stock
                $new_stock = $current_stock - $quantity;
            } else {
                return "Stok $item_name tidak cukup. Sisa stok: $current_stock";
            }
        } else {
            return "Operasi tidak valid.";
        }

        // Update the stock
        $sql = "UPDATE barang SET stok = ? WHERE nama_barang = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
        }
        $stmt->bind_param("is", $new_stock, $item_name);
        $stmt->execute();
        $stmt->close();
        
        if ($operation === 'add') {
            return "Stok $item_name bertambah $quantity. Total stok: $new_stock";
        } else {
            return "Stok $item_name berkurang $quantity. Sisa stok: $new_stock";
            
        }
        
    } else {
        return "Barang $item_name tidak ditemukan.";
    }
}

// Handle the request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $operation = $_POST['operation'] ?? '';

    echo update_stock($conn, $item_name, $quantity, $operation);
}

// Close the connection after all operations are done
$conn->close();
?>
