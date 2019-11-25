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
    <?php include 'includes/navbar.php' ?>
    <section class="gallery-block grid-gallery">
        <div class="container">
            <div class="heading pt-5">
                <h1 class="text-center">Gallery Cintya Wedding Organizer</h1>
            </div>
            <div class="row">
                <?php
                $query = "SELECT * FROM galeri2";
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

                <!-- <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/gal2.png">
                            <img class="img-fluid image scale-on-hover" src="img/gal2.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/gal3.png">
                            <img class="img-fluid image scale-on-hover" src="img/gal3.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/gal4.png">
                            <img class="img-fluid image scale-on-hover" src="img/gal4.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/gal5.png">
                            <img class="img-fluid image scale-on-hover" src="img/gal5.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/gal6.png">
                            <img class="img-fluid image scale-on-hover" src="img/gal6.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/gal7.png">
                            <img class="img-fluid image scale-on-hover" src="img/gal7.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/gal8.png">
                            <img class="img-fluid image scale-on-hover" src="img/gal8.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/gal9.png">
                            <img class="img-fluid image scale-on-hover" src="img/gal9.png">
                        </a>
                    </div> -->
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