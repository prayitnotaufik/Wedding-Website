<?php
session_start();
include('../config/connection.php');


$id = $_GET["id"];


$query =  "DELETE FROM `galeri2` WHERE `id_gambar` = '$id'";


if (mysqli_query($con, $query)) {
    header("Location:../admin-galeri.php");
} else {
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin-galeri.php?error=$error");
}


mysqli_close($con); 

?>