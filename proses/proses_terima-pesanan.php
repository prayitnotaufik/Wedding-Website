<?php
session_start();
include('../config/connection.php');


$id = $_GET["id"];

$query = "UPDATE pemesanan SET status  = 'Acepted' WHERE pemesanan.id_pemesanan = '$id'";


if (mysqli_query($con, $query)) {
    header("Location:../admin-pemesanan.php");
} else {
    $error = urldecode("Pesanan tidak berhasil di ubah");
    header("Location:../admin-pemesanan.php?error=$error");
}


mysqli_close($con); 

?>