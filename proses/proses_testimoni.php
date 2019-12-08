<?php
    session_start();
    include('../config/connection.php');
    
    $id = $_POST["id_pemesanan"];
    $testimoni = $_POST["testimoni"];

    $sql = "UPDATE pemesanan SET testimoni = '$testimoni' WHERE id_pemesanan = '$id'";

    if (mysqli_query($con, $sql)) {
        header("Location:../status2.php");
    } else {
        $error = urldecode("Data tidak berhasil ditambahakan");
        header("Location:../status2.php?error=$error");
    }

    mysqli_close($con);

?>