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
            <div class="heading pt-5">
                <h1 class="text-center" style="color: white">Register Pelanggan</h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="card" style="background-color: rgba(0, 0, 0, 0.37);">
                    <div class="card-body" style="color: white">
                    <form action="proses/proses_register.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="InputNama">Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="InputUsername">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="InputAlamat">Alamat</label>
                        <textarea class="form-control" name="alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="InputNomor">No. Telepon</label>
                        <input type="number" class="form-control" name="telepon" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%">Daftar</button>
                    <p>
                    <p class="text-center">Sudah Punya Akun? <a href="login.php" style="color: yellow">Login</a></p>
                    </form>
                    </div>
                    </div>   
                </div>
            </div>
    </section>
    <?php include 'includes/footer.php' ?>
</body>
</html>