<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/grid-gallery.css">
    <?php include 'includes/head.php'?>
</head>
<body>
    <?php include 'includes/navbar.php' ?>
    <section class="gallery-block grid-gallery">
            <div class="container">
                <div class="col-md-4 offset-md-4">
                <div class="heading pt-5">
                    <h1 class="text-center">Login Pelanggan</h1>
                </div>
                <div class="card">
                <div class="card-content">
                    <div class="col-s12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form action="proses/proses_login.php" method="post">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <button class="btn btn-primary" style="width:303px" name="login">Login</button>
                                <p>
                                <div class="text-center">
                                        <p>Belum Punya Akun? <a href="register.php">Register</a></p>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php' ?>
</body>
</html>