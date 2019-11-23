<?php
    session_start();
    include('../config/connection.php');
    
    $id = $_POST["id_pemesanan"];
    $code = $_FILES['file']['error'];
    if ($code === 0) {     

        $destination_path = getcwd();

        $error = "";
        $nama_folder = "bukti";
        $tmp = $_FILES['file']['tmp_name'];
        $nama_file = $_FILES['file']['name'];
        $path = $destination_path . "\\..\\$nama_folder\\$nama_file";

        if (file_exists($path)) {
            $error = urldecode("File dengan nama yang sama sudah tersimpan, coba lagi");
            header("Location:../status2.php?error=$error");
        }

        $ukuran = $_FILES['file']['size'];
        if ($ukuran > 2000000) {
            $error = urldecode("Ukuran melebihi 2 MB");
            header("Location:../status2.php?error=$error");
        }

        $tipe_file = array('image/jpeg', 'image/gif', 'image/png');
        if (!in_array($_FILES['file']['type'], $tipe_file)) {
            $error = urldecode("Cek Kembali Ekstensi File Anda (*jpeg, *jpg, *gif, *png)");
            header("Location:../status2.php?error=$error");
        }

        if(move_uploaded_file($tmp, $path)) {

            $sql = "UPDATE pemesanan SET bukti_pembayaran = '$nama_file' WHERE id_pemesanan = '$id'";

            if (mysqli_query($con, $sql)) {
                header("Location:../status2.php");
            } else {
                $error = urldecode("Data tidak berhasil ditambahakan");
                header("Location:../index.php?error=$error");
            }
        }
    } else {
        $error = urldecode("Foto tidak berhasil terupload");
        header("Location:../status2.php?error=$error");
    }
    mysqli_close($con);

?>