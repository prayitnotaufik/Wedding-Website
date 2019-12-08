<!DOCTYPE html>
<html lang="en">
<?php include 'config/connection.php' ?>
<?php
$id_user = $_GET["id_user"];
$id_paket = $_GET["id_paket"];
$query = "SELECT * FROM paket WHERE id_paket = $id_paket";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);


$nz_time = new DateTime(null, new DateTimezone('Asia/Jakarta'));
// echo $nz_time->format('d-m-Y');

$dateNow = $nz_time->format('d-m-Y');
$query2 = "SELECT * FROM pemesanan WHERE DATE(tgl_kembali) > DATE(NOW())";
$result2 = mysqli_query($con, $query2);
// $pemesanan = mysqli_fetch_assoc($result2);

?>
<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>
    <div class="container mt-5 pt-5 mb-5">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col">
                        <h1><?php echo $row["nama_paket"] ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img style="max-width:500px" src="foto/<?php echo $row["foto"] ?>" alt="" srcset="">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <br>
                        <h3 style="color:purple">Harga : Rp.<?php echo $row["harga"] ?>,-</h3>
                        <p>Dekorasi : <?php echo $row["dekorasi"] ?></p>
                        <p>Rias & Baju : <?php echo $row["rias_baju"] ?></p>
                        <p>Dokumentasi : <?php echo $row["dokumentasi"] ?></p>
                        <p>MC : <?php echo $row["mc"] ?></p>
                        <p>Free : <?php echo $row["free"] ?></p>
                        <p>Biaya Pemeliharaan : Rp.<?php echo $row["biaya_pelihara"] ?>,-/Hari</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 bg-ungu rounded">
                <form action="proses/proses_pemesanan.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                    <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                    <div>
                        <h4 class="text-center">Tanggal yang sudah dipesan</h4>

                        <!-- <h6>Tanggal yang sudah dipesan :</h6> -->
                        <?php
                        if (mysqli_num_rows($result2) > 0) {
                            while ($pemesanan = mysqli_fetch_assoc($result2)) { ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="tanggal">Tanggal Pesan</label>
                                        <input class="form-control" type="" value="<?php echo date_format(new DateTime($pemesanan["tgl_pesan"]),'d-m-Y')  ?>" id="tanngal" name="tanggal_pesan" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="tanggal">Tanggal Selesai</label>
                                        <input class="form-control" type="" value="<?php echo date_format(new DateTime($pemesanan["tgl_kembali"]),'d-m-Y')  ?>" id="tanngal" name="tanggal_kembali" disabled>
                                    </div>
                                </div>
                            <?php }
                        }?>
                    </div>
                    <hr>
                    <h4 class="text-center">Pesanan Anda</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="tanggal">Tanggal Pesan</label>
                            <input class="form-control" type="date" value="2011-08-19" id="tanngal" name="tanggal_pesan">
                        </div>
                        <div class="col-sm-6">
                            <label for="tanggal">Tanggal Selesai</label>
                            <input class="form-control" type="date" value="2011-08-19" id="tanngal" name="tanggal_kembali">
                        </div>
                        <div class="col-sm-12">
                            <label for="lokasi">Lokasi</label>
                            <input class="form-control" type="text" value="" id="lokasi" placeholder="Masukkan Lokasi Penyelenggaraan" name="lokasi">
                        </div>
                        <div class="col-sm-12">
                            <label for="catatan">Catatan</label>
                            <textarea rows="5" class="form-control" type="text" value="" id="lokasi" placeholder="Masukkan Catatan" name="catatan"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-block btn-primary">Pesan</button>
                            <button type="reset" class="btn btn-block btn-danger">Reset</button>
                        </div>
                    </div>
                    <div class="form-group row">

                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/scripts.php' ?>
</body>

</html>