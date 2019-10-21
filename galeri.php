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
                        <a class="lightbox" href="img/image1.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image1.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/image2.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image2.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/image3.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image3.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/image4.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image4.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/image5.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image5.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/image6.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image6.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/image7.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image7.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/image8.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image8.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/image9.jpg">
                            <img class="img-fluid image scale-on-hover" src="img/image9.jpg">
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
