<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php' ?>
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <div class="d-flex pt-5 mt-4" id="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <!-- Page Content -->
        <div style="background-color:#E3EDEA;" id="page-content-wrapper">
            <div class="container-fluid mt-3 ml-3">
                <div class="row mb-3">
                    <h1 class="">Tambah Paket</h1><br>
                </div>   
            </div>
            <div class="container">
                <form action="proses/proses_tambah-paket.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="my-input">Nama Paket</label>
                                <input id="my-input" class="form-control" type="text" name="nama" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="my-input">Harga</label>
                                <input id="my-input" class="form-control" type="text" name="harga" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="my-input">Dekorasi</label>
                                <input id="my-input" class="form-control" type="text" name="dekorasi" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Rias & Baju</label>
                                <input id="my-input" class="form-control" type="text" name="rias_baju" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Dokumentasi</label>
                                <input id="my-input" class="form-control" type="text" name="dokumentasi" >
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">MC</label>
                                <input id="my-input" class="form-control" type="text" name="mc" >
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Free</label>
                                <input id="my-input" class="form-control" type="text" name="free" >
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="my-input">Biaya Peliharaan</label>
                                <input id="my-input" class="form-control" type="text" name="biaya" >
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="my-input">Foto</label>
                                <input type="file" name="file" for="file" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success btn-block btn-fill">Tambah</button>
                        </div>
                        <div class="col-md-2">
                            <a href="admin-paket.php" class="btn btn-warning btn-block btn-fill">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>

</html>