<?php

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "co");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to register a new user
function register($data) {
    global $con;

    // Sanitize and validate input data
    $username = strtolower(htmlspecialchars($data["username"]));
    $email = strtolower(htmlspecialchars($data["email"]));
    $password = $data["password"];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $con->prepare("INSERT INTO pemilik (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

?>
