<?php
session_start();
include('../config/connection.php');


$id = $_GET["id"];


$query =  "DELETE FROM `paket` WHERE `paket`.`id_paket` = '$id'";


if (mysqli_query($con, $query)) {
    header("Location:../admin-paket.php");
} else {
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../admin-paket.php?error=$error");
}


mysqli_close($con); 

?>