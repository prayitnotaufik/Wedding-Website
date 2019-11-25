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
                <h1 class="">Data Galeri</h1>
            </div>
            <div class="container">
                <table class="table table-striped table-bordered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM galeri2";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            $no = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $no++;
                                ?>
                                <tr class="">
                                    <td> <?php echo $no ?> </td>
                                    <td> <img src="galeri/<?php echo $row["file_gambar"] ?>" alt="foto" width="100px">
                                    </td>
                                    <td>
                                        <?php
                                        switch ($row['kategori']) {
                                            case 1:
                                                echo "Dekorasi Pelaminan";
                                                break;
                                            case 2:
                                                echo "Gaun Pengantin";
                                                break;
                                            case 3:
                                                echo "Prosesi";
                                            break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a role="button" class="btn btn-danger" href="proses/proses_delete-galeri.php?id=<?php echo $row["id_gambar"] ?> ">Delete</a>
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
            <div class="container-fluid">
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal1">
                    Tambah Gambar
                </button>
            </div>

            <!-- MODAL -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            
                                <h4 class="media-heading text-center">Upload Gambar</h4>
                            
                            <hr>
                        </div>
                        <div class="row">
                            <div class="container">
                                <form action="proses/proses_upload-gambar.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="my-input">Gambar Galeri</label>
                                            <input type="file" name="file" for="file" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                        <label for="selectkategori">Kategori</label>
                                        <select class="form-control" name="kategori" id="selectkategori">
                                            <option value="1">Dekorasi Pelaminan</option>
                                            <option value="2">Gaun Pengantin</option>
                                            <option value="3">Prosesi</option>
                                        </select>
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

        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include 'includes/scripts.php' ?>
</body>

</html>