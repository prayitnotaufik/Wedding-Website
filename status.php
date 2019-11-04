<!DOCTYPE html>
<html lang="en">
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
                        <label for="lokasi">Nama Pemesan</label>
                        <input class="form-control" type="text" value="" id="lokasi" placeholder="Nama Anda" disabled>
                    </div>
                    <div class="col-sm-12">
                        <label for="lokasi">Paket yang dipesan</label>
                        <input class="form-control" type="text" value="" id="lokasi" placeholder="Paket blablabla" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label for="tanggal">Tanggal Pesan</label>
                        <input class="form-control" type="date" value="2011-08-19" id="tanngal" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label for="tanggal">Tanggal Selesai</label>
                        <input class="form-control" type="date" value="2011-08-19" id="tanngal" disabled>
                    </div>
                    <div class="col-sm-12">
                        <label for="lokasi">Lokasi</label>
                        <input class="form-control" type="text" value="" id="lokasi" placeholder="Lokasi Penyelenggaraan" disabled>
                    </div>
                    <div class="col-sm-12">
                        <label for="catatan">Catatan</label>
                        <textarea rows="5" class="form-control" type="text" value="" id="lokasi" placeholder="Masukkan Catatan" disabled></textarea>
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