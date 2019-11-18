<?php
    session_start();
    include('../config/connection.php');
    
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $dekorasi = $_POST["dekorasi"];
    $rias_baju = $_POST["rias_baju"];
    $dokumentasi = $_POST["dokumentasi"];
    $mc = $_POST["mc"];
    $free = $_POST["free"];
    
    $sql = "INSERT INTO paket (nama_paket,harga,dekorasi,rias_baju,dokumentasi,mc,free) VALUES ('$nama', '$harga', '$dekorasi', '$rias_baju','$dokumentasi','$mc','$free')";
    if (mysqli_query($con, $sql)) {
        header("Location:../admin-paket.php");
    }
    mysqli_close($con);
?>