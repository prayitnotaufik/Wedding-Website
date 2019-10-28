<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compact Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/grid-gallery.css">
    <?php include 'includes/head.php'?>
</head>
<body>
<?php include 'includes/navbar.php'?>
<section class="gallery-block grid-gallery">
            <div class="container">
                <div class="heading pt-5">
                    <h1 class="text-center">Gallery Cintya Wedding Organizer</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal1.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal2.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal3.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal4.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal5.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal6.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal7.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal8.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="#">
                            <img class="img-fluid image scale-on-hover" src="img/gal9.png">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
        </script>
    <?php include 'includes/footer.php' ?>
</body>
</html>
