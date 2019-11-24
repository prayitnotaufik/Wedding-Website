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
                <h1 class="">Data Customer</h1>
            </div>
            <div class="container">
                <table class="table table-striped table-bordered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM user WHERE type='customer'";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            $no = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                // $id = $row["id_paket"];
                                $no++;
                                ?>
                                <tr class="">
                                    <td><?php echo $no ?></td>
                                    <td> <?php echo $row["username"] ?> </td>
                                    <td> <?php echo $row["nama"] ?> </td>
                                    <td><?php echo $row["alamat"] ?></td>
                                    <td><?php echo $row["no_telp"] ?></td>
                                    <td><?php echo $row["email"] ?></td>
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