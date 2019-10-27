<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/grid-gallery.css">
    <?php include 'includes/head.php'?>
</head>
<body>
    <?php include 'includes/navbar.php' ?>
    <section class="gallery-block grid-gallery">
        <div class="container">
            <div class="heading pt-5">
                <h1 class="text-center">Register Pelanggan</h1>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Nama</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email</label>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Alamat</label>
                                    <div class="col-md-7">
                                        <textarea class="form-control" name="alamat" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Nomor Telepon</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="telepon" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-7 col-md-offset-3">
                                        <button class="btn btn-primary" name="daftar">Daftar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php' ?>
</body>
</html>