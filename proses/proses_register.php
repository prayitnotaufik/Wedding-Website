<?php
    session_start();
    include('../config/connection.php');
    
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];
    
    $sql = "INSERT INTO user (username,password,nama,alamat,no_telp,email) VALUES ('$username', '$password', '$nama', '$alamat','$telepon','$email')";
    if (mysqli_query($con, $sql)) {
        header("Location:../login.php");
    }
    mysqli_close($con);
?>