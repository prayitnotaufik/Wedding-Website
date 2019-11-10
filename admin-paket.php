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
                            <th scope="col">Dekorasi</th>
                            <th scope="col">Rias & Baju</th>
                            <th scope="col">Dokumentasi</th>
                            <th scope="col">MC</th>
                            <th scope="col">Free</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hemat</td>
                            <td>Rp.2000.000</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>

</html>