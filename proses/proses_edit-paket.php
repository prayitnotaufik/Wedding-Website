<?php
    session_start();
    include('../config/connection.php');
    
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $dekorasi = $_POST["dekorasi"];
    $rias_baju = $_POST["rias_baju"];
    $dokumentasi = $_POST["dokumentasi"];
    $mc = $_POST["mc"];
    $free = $_POST["free"];

    $sql = "UPDATE paket SET nama_paket ='$nama',harga ='$harga',dekorasi ='$dekorasi',rias_baju ='$rias_baju',dokumentasi ='$dokumentasi',mc ='$mc',free ='$free' WHERE id_paket = '$id'";
    if (mysqli_query($con, $sql)) {
        header("Location:../admin-paket.php");
    }
    mysqli_close($con);
?>