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
            <div class="container-fluid mt-3">
                <h1 class="">Data Paket</h1>
            </div>
            <div class="container">
                <table class="table table-striped table-bordered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hemat</td>
                            <td>Rp.2000.000</td>
                            <td>
                                <a role="button" class="btn btn-primary" href="">Detail</a>
                                <a role="button" class="btn btn-primary" href="">Edit</a>
                                <a role="button" class="btn btn-danger" href="">Delete</a>
                            </td>
                        </tr> 
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
</body>

</html>