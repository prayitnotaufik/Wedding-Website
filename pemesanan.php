<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>
    <div class="container mt-5 pt-5 " style="min-height:720px">
        <div class="row">
            <div class="col-md-7 border border-primary">
                <div class="row">
                    <h4>Paket blablabla</h4>
                </div>
                <div class="row">
                    <img style="max-width:75%" src="img/gal1.png" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-5 border border-primary">
                <div>
                    <h4 class="text-center">Rincian Pemesanan</h4>
                    <label for="">Tanggal yang sudah dipesan</label>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="tanggal">Tanggal Pesan</label>
                        <input class="form-control" type="date" value="2011-08-19" id="tanngal">
                    </div>
                    <div class="col-sm-6">
                        <label for="tanggal">Tanggal Selesai</label>
                        <input class="form-control" type="date" value="2011-08-19" id="tanngal">
                    </div>
                    <div class="col-sm-12">
                        <label for="lokasi">Lokasi</label>
                        <input class="form-control" type="text" value="" id="lokasi" placeholder="Masukkan Lokasi Penyelenggaraan">
                    </div>
                    <div class="col-sm-12">
                        <label for="catatan">Catatan</label>
                        <textarea rows="5" class="form-control" type="text" value="" id="lokasi" placeholder="Masukkan Catatan"></textarea>
                    </div>
                </div>
                <div class="form-group row">

                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
</body>

</html>