<!DOCTYPE html>
<html lang="en">
<?php include 'config/connection.php' ?>
<?php
    $id_user = $_GET["id_user"];
    $id_paket = $_GET["id_paket"];
    $query = "SELECT * FROM paket WHERE id_paket = $id_paket";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
?>
<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>
    <div class="container mt-5 pt-5 " style="min-height:720px">
        <div class="row">
            <div class="col-md-7 border border-primary">
                <div class="row">
                    <h4><?php echo $row["nama_paket"] ?></h4>
                </div>
                <div class="row">
                    <img style="max-width:600px" src="foto/<?php echo $row["foto"] ?>" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-5 border border-primary">
                <form action="proses/proses_pemesanan.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                    <div>
                        <h4 class="text-center">Rincian Pemesanan</h4>
                        <label for="">Tanggal yang sudah dipesan</label>
                    </div>
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
                            <textarea rows="5" class="form-control" type="text" value="" id="lokasi" placeholder="Masukkan Catatan" name="catatan" ></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-block btn-primary">Pesan</button>
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