<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'config/connection.php' ?>
    <?php include 'includes/head.php' ?>
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <div class="d-flex pt-5 mt-4" id="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <!-- Page Content -->
        <div style="background-color:#E3EDEA;" id="page-content-wrapper">
            <div class="container-fluid mt-3">
                <h1 class="">Data Pemesanan</h1>
                <p style="color:red"><?php echo @$_GET["error"] ?></p>
            </div>
            <div class="container">
                <table class="table table-striped table-bordered" style="background-color: white">
                    <thead class="table-dark">
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
                        $query = "SELECT * FROM pemesanan";
                        $result = mysqli_query($con, $query);

                        $query2 = "SELECT * FROM paket INNER JOIN pemesanan ON (paket.id_paket=pemesanan.id_paket)";
                        $result2 = mysqli_query($con, $query2);
                        $paket = mysqli_fetch_assoc($result2);
                        if (mysqli_num_rows($result) > 0) {
                            $no = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $no++;
                                $tanggal1 = strtotime($row["tgl_pesan"]);
                                $tanggal2 = strtotime($row["tgl_kembali"]);
                                $dif = $tanggal2 - $tanggal1;
                                $hasil = round($dif / 86400);
                                $jumlah = $paket["harga"] + ($hasil * $paket["biaya_pelihara"]);
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo date_format(new DateTime($row["tgl_pesan"]),'d-m-Y') ?></td>
                                    <td><?php echo date_format(new DateTime($row["tgl_kembali"]),'d-m-Y') ?></td>
                                    <td><?php echo $row["lokasi"] ?></td>
                                    <td><?php echo $row["catatan"] ?></td>
                                    <td><?php echo $jumlah ?></td>
                                    <td>
                                        <?php
                                                if ($row["bukti_pembayaran"] == null) { ?>
                                            Belum Terupload
                                        <?php } else { ?>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal<?php echo $row["id_pemesanan"] ?>">
                                                Lihat Bukti Pembayaran
                                            </button>
                                            <!-- MODAL -->
                                            <div class="modal fade bd-example-modal-lg" id="modal<?php echo $row["id_pemesanan"] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <center>
                                                                <h4 class="media-heading">Bukti Pembayaran</h4>
                                                            </center>
                                                            <hr>
                                                        </div>
                                                        <div class="row">
                                                            <div class="container">
                                                                <div>
                                                                    <div class="item">
                                                                        <a class="lightbox">
                                                                            <img class="img-fluid image scale-on-hover" src="bukti/<?php echo $row["bukti_pembayaran"] ?>">
                                                                        </a>
                                                                    </div>
                                                                </div>
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
                                        <button class="btn btn-block btn-outline-primary" disabled><?php echo $row["status"] ?></button>
                                        <br>
                                        <a href="proses/proses_terima-pesanan.php?id=<?php echo $row["id_pemesanan"] ?>" class="btn btn-block btn-outline-primary">Accept</a>
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
            <!-- <div class="container-fluid">
                <a name="" id="" class="btn btn-dark" href="tambah-paket.php" role="button">Tambah Paket</a>
            </div> -->

        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include 'includes/scripts.php' ?>
</body>

</html>