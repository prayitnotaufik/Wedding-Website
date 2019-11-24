<!DOCTYPE html>
<html>
<?php include 'includes/head.php' ?>
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
<style>
    body {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: url("img/bg1.jpg");
    background-size: cover;
    }
</style>
    <?php include 'includes/navbar.php' ?>
    <section class="gallery-block grid-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin-right:120px">
                    <div class="heading pt-5">
                        <h1 class="text-center" style="color:white">Login Pelanggan</h1>
                    </div>
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.37)">
                        <div class="card-body" style="color: white">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form action="proses/proses_login.php" method="post">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control form-control-block" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <button class="btn btn-primary" style="width:303px" name="login">Login</button>
                                        <p>
                                        <div class="text-center">
                                            <p>Belum Punya Akun? <a href="register.php" style="color: yellow">Register</a></p>
                                        </div>
                                        <div class="text-center">
                                            <p><?php echo @$_GET["pesan"] ?></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-8" style="margin-right:-500px"><img class="img-fluid" src="img/bglogin.png"></div>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php' ?>
</body>
</html>