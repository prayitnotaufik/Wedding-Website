<?php  
    session_start();
    include('../config/connection.php');

    $tanggal_pesan = $_POST["tanggal_pesan"];
    $tanggal_kembali = $_POST["tanggal_kembali"];
    $lokasi = $_POST["lokasi"];
    $catatan = $_POST["catatan"];
    $id_user = $_POST["id_user"];
    $id_paket = $_POST["id_paket"];

    $sql = "INSERT INTO pemesanan (tgl_pesan,tgl_kembali,lokasi,catatan,user_id,id_paket)
    VALUES ('$tanggal_pesan','$tanggal_kembali','$lokasi','$catatan','$id_user','$id_paket')";

    if (mysqli_query($con, $sql)) {
        // $last_id = mysqli_insert_id($con);
    header("Location:../status2.php");
    } else {
    $error = urldecode("Data tidak berhasil ditambahakan");
    header("Location:../paket.php?error=$error");
    }
?>