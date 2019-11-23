<!DOCTYPE html>
<html lang="en">
<?php include 'config/connection.php' ?>

<?php
    $id_pemesanan = $_GET["id"];
    $_SESSION['id_pemesanan'] = $id_pemesanan;
    $lastid =  $_SESSION['id_pemesanan'];
    $query = "SELECT * FROM pemesanan WHERE id_pemesanan = '$lastid'";
    $result = mysqli_query($con, $query);
    $pemesanan = mysqli_fetch_assoc($result);
    
    $query2 = "SELECT * FROM paket INNER JOIN pemesanan ON (paket.id_paket=pemesanan.id_paket)";
    $result2 = mysqli_query($con,$query2);
    $paket = mysqli_fetch_assoc($result2);

    $query3 = "SELECT * FROM user INNER JOIN pemesanan ON (user.id_user=pemesanan.user_id)";
    $result3 = mysqli_query($con,$query3);
    $user = mysqli_fetch_assoc($result3);
?>



<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>
    <div class="container mt-5 pt-5 " style="min-height:720px">
        <div class="row">
            <div class="col-md-7 border border-primary">
                <div>
                    <h4 class="text-center">Rincian Pemesanan</h4>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="nama">Nama Pemesan</label>
                        <input class="form-control" type="text" value="<?php echo $user["nama"] ?>" id="lokasi" disabled>
                    </div>
                    <div class="col-sm-12">
                        <label for="paket">Paket yang dipesan</label>
                        <input class="form-control" type="text" value="<?php echo $paket["nama_paket"] ?>" id="lokasi" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label for="tanggal">Tanggal Pesan</label>
                        <input class="form-control" type="date" value="<?php echo $pemesanan["tgl_pesan"] ?>" id="tanngal" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label for="tanggal">Tanggal Selesai</label>
                        <input class="form-control" type="date" value="<?php echo $pemesanan["tgl_kembali"] ?>" id="tanngal" disabled>
                    </div>
                    <div class="col-sm-12">
                        <label for="lokasi">Lokasi</label>
                        <input class="form-control" type="text" value="<?php echo $pemesanan["lokasi"] ?>" id="lokasi" placeholder="Lokasi Penyelenggaraan" disabled>
                    </div>
                    <div class="col-sm-12">
                        <label for="catatan">Catatan</label>
                        <textarea rows="5" class="form-control" type="text" id="lokasi" placeholder="Masukkan Catatan" disabled><?php echo $pemesanan["catatan"] ?></textarea>
                    </div>
                    <div class="col-sm-12">
                        <h4>Total Biaya : Rp.xxx.xxx</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 border border-primary">
                <div>
                    <h4 class="text-center">Upload Bukti Pembayaran</h4>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/scripts.php' ?>
</body>

</html>