<!DOCTYPE html>
<html lang="en">
<?php include 'config/connection.php' ?>
<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>
    <div class="container mt-5 pt-5 " style="min-height:720px">
        <div class="container-fluid mt-3">
            <h1 class="">Data Pesanan</h1>
            <p>Catatan : Jika sudah mengupload bukti pembayaran silahkan hubungi contact person untuk kelanjutan pesanan</p>
        </div>
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal Pesan</th>
                        <th>Tanggal Kembali</th>
                        <th>Lokasi</th>
                        <th>Catatan</th>
                        <th>Harga</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    @$id_user = $_SESSION["id"];
                    $query = "SELECT * FROM pemesanan WHERE user_id = '$id_user' ";
                    $result = mysqli_query($con, $query);

                    $query2 = "SELECT * FROM paket INNER JOIN pemesanan ON (paket.id_paket=pemesanan.id_paket)";
                    $result2 = mysqli_query($con, $query2);
                    $paket = mysqli_fetch_assoc($result2);

                    if (mysqli_num_rows($result) > 0) {
                        $no = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            // $tanggal = date_diff($row["tgl_kembali"],$row["tgl_pesan"]);
                            $tanggal1 = strtotime($row["tgl_pesan"]);
                            $tanggal2 = strtotime($row["tgl_kembali"]);
                            $dif = $tanggal2 - $tanggal1;
                            $hasil = round($dif / 86400);
                            $jumlah = $paket["harga"] + ($hasil * $paket["biaya_pelihara"]);
                            ?>

                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo date_format(new DateTime($row["tgl_pesan"]), 'd-m-Y')  ?></td>
                                <td><?php echo date_format(new DateTime($row["tgl_kembali"]), 'd-m-Y') ?></td>
                                <td><?php echo $row["lokasi"] ?></td>
                                <td><?php echo $row["catatan"] ?></td>
                                <td>Rp.<?php echo $jumlah ?>,-</td>
                                <td>
                                    <?php
                                            if ($row["bukti_pembayaran"] != null) { ?>
                                        Sudah Terupload
                                    <?php } else { ?>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal<?php echo $row["id_pemesanan"] ?>">
                                            Upload
                                        </button>
                                        <!-- MODAL -->
                                        <div class="modal fade" id="modal<?php echo $row["id_pemesanan"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <center>
                                                            <h4 class="media-heading">Upload Bukti Pembayaran</h4>
                                                        </center>
                                                        <hr>
                                                    </div>
                                                    <div class="row">
                                                        <div class="container">
                                                            <form action="proses/proses_upload-bukti.php" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                                                <input type="hidden" name="id_pemesanan" value="<?php echo $row["id_pemesanan"] ?>">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="my-input">Foto Bukti Pembayaran</label>
                                                                        <input type="file" name="file" for="file" class="form-control" required>
                                                                    </div>
                                                                    <div>
                                                                        <button type="submit" class="btn btn-block btn-outline-primary">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- MODAL -->
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php
                                            // echo $row["status"]
                                            $date = new DateTime($row["tgl_kembali"]);
                                            $now = new DateTime();
                                            if ($row["status"] == "Acepted" && $date < $now) {
                                                if ($row["testimoni"] != null) {
                                                    echo 'Pesanan Selesai';
                                                } else { ?>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#testimoni<?php echo $row["id_pemesanan"] ?>">
                                                Testimoni
                                            </button>
                                            <!-- MODAL -->
                                            <div class="modal fade" id="testimoni<?php echo $row["id_pemesanan"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body" style="margin-bottom:-35px">
                                                            <center>
                                                                <h4 class="media-heading">Berikan Testimoni</h4>
                                                            </center>
                                                            <hr>
                                                        </div>
                                                        <div class="row" style="margin-top:0px">
                                                            <div class="container">
                                                                <form action="proses/proses_testimoni.php" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                                                    <input type="hidden" name="id_pemesanan" value="<?php echo $row["id_pemesanan"] ?>">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="testimoni">Testimoni</label>
                                                                            <textarea rows="5" class="form-control" type="text" value="" id="lokasi" placeholder="Masukkan Testimoni" name="testimoni"></textarea>
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit" class="btn btn-block btn-outline-primary">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                    <?php }
                                            } elseif ($row["status"] == "Waiting") {
                                                echo 'Waiting';
                                            } else {
                                                echo 'Accepted';
                                            }
                                            ?>

                                </td>

                            </tr>
                        <?php } ?>
                    <?php }
                    // close mysql connection
                    mysqli_close($con);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
    <?php include 'includes/footer.php' ?>

</body>

</html>