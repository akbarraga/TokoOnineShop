<?php

$con = mysqli_connect("localhost","root","","co");

function register($data) {
    global $con;

    $username = strtolower(htmlspecialchars($data["username"]));
    $email = strtolower(htmlspecialchars($data["email"]));
    $password = mysqli_real_escape_string($con, $data["password"]);


    $password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users VALUES ('','$username', '$email', '$password')"; 

    mysqli_query($con,$sql);
}
