<!DOCTYPE html>
<html>
<?php include 'config/connection.php' ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compact Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/grid-gallery.css">
    <?php include 'includes/head.php' ?>
</head>

<body>
<style>
    body {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: url("img/bgbg.png");
    background-size: cover;
    }
</style>
    <?php include 'includes/navbar.php' ?>
    <section class="gallery-block grid-gallery">
        <div class="container">
            <div class="heading pt-5">
                <h1 class="text-center" style="margin-bottom:-30px">Gallery Cintya Wedding Organizer</h1>
            </div>
            <div>
            <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active bg-purple" id="pills-dekor-tab" data-toggle="pill" href="#pills-dekor" role="tab" aria-controls="pills-dekor" aria-selected="true">Dekorasi Pelaminan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-gaun-tab" data-toggle="pill" href="#pills-gaun" role="tab" aria-controls="pills-gaun" aria-selected="false">Gaun Pengantin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-prosesi-tab" data-toggle="pill" href="#pills-prosesi" role="tab" aria-controls="pills-prosesi" aria-selected="false">Prosesi</a>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-dekor" role="tabpanel" aria-labelledby="pills-dekor-tab">
                <div class="row">
                    <?php
                    $query = "SELECT * FROM galeri2 WHERE kategori=1";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="galeri/<?php echo $row["file_gambar"] ?>">
                                    <img class="img-fluid image scale-on-hover" src="galeri/<?php echo $row["file_gambar"] ?>">
                                </a>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-gaun" role="tabpanel" aria-labelledby="pills-gaun-tab">
                <div class="row">
                        <?php
                        $query = "SELECT * FROM galeri2 WHERE kategori=2";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="col-md-6 col-lg-4 item">
                                    <a class="lightbox" href="galeri/<?php echo $row["file_gambar"] ?>">
                                        <img class="img-fluid image scale-on-hover" src="galeri/<?php echo $row["file_gambar"] ?>">
                                    </a>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
            </div>
            <div class="tab-pane fade" id="pills-prosesi" role="tabpanel" aria-labelledby="pills-prosesi-tab">
                <div class="row">
                        <?php
                        $query = "SELECT * FROM galeri2 WHERE kategori=3";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="col-md-6 col-lg-4 item">
                                    <a class="lightbox" href="galeri/<?php echo $row["file_gambar"] ?>">
                                        <img class="img-fluid image scale-on-hover" src="galeri/<?php echo $row["file_gambar"] ?>">
                                    </a>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
            </div>
            </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.grid-gallery', {
            animation: 'slideIn'
        });
    </script>
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/scripts.php' ?>
</body>

</html>