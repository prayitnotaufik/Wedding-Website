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
                <h1 class="">Data Paket</h1>
            </div>
            <div class="container">
                <table class="table table-striped table-bordered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM paket";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row["id_paket"];
                                ?>
                                <tr class="">
                                    <td> <?php echo $row["id_paket"] ?> </td>
                                    <td> <?php echo $row["nama_paket"] ?> </td>
                                    <td><?php echo $row["harga"] ?></td>
                                    <td>
                                        <a href="#modal" class="btn btn-primary" data-toggle="modal" aria-pressed="false" data-target="#modal<?php echo $row["id_paket"] ?>" role="button">Detail</a>
                                        <a role="button" class="btn btn-warning" href="edit-paket.php?id=<?php echo $row["id_paket"] ?> ">Edit</a>
                                        <a role="button" class="btn btn-danger" href="proses/proses_delete-paket.php?id=<?php echo $row["id_paket"] ?> ">Delete</a>
                                    </td>
                                    <!-- MODAL -->
                                    <div class="modal fade" id="modal<?php echo $row["id_paket"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <?php ?>
                                                    <center>
                                                        <h4 class="media-heading">Paket <?php echo $row["nama_paket"]; ?></h4>
                                                    </center>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>Nama Paket</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>:</p>
                                                        </div>
                                                        <div style="" class="col-md-7">
                                                            <p><?php echo $row["nama_paket"] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>Harga</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>:</p>
                                                        </div>
                                                        <div style="" class="col-md-6">
                                                            <p><?php echo $row["harga"] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>Dekorasi</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>:</p>
                                                        </div>
                                                        <div style="" class="col-md-6">
                                                            <p><?php echo $row["dekorasi"] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>Rias & Baju</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>:</p>
                                                        </div>
                                                        <div style="" class="col-md-6">
                                                            <p><?php echo $row["rias_baju"] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>Dokumentasi</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>:</p>
                                                        </div>
                                                        <div style="" class="col-md-6">
                                                            <p><?php echo $row["dokumentasi"] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>Mc</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>:</p>
                                                        </div>
                                                        <div style="" class="col-md-6">
                                                            <p><?php echo $row["mc"] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p>Free</p>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <p>:</p>
                                                        </div>
                                                        <div style="" class="col-md-6">
                                                            <p><?php echo $row["free"] ?></p>
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
                                </tr>
                            <?php } ?>
                        <?php }
                        // close mysql connection
                        mysqli_close($con);
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="container-fluid">
                <a name="" id="" class="btn btn-dark" href="tambah-paket.php" role="button">Tambah Paket</a>
            </div>

        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include 'includes/scripts.php' ?>
</body>

</html>