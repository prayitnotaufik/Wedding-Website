<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/grid-gallery.css">
    <?php include 'includes/head.php'?>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />
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
            <h1 class="text-center" style="margin-top:30px; margin-bottom:30px">Tentang</h1>
            <div class="row">
            <div class="col-6 pr-5">
                <div class="column">
                    <h3 style="color:purple">Tentang Cintya Wedding Organizer</h3>
                    <p>Cintya wedding organizer merupakan salah satu upaya dalam membantu menyiapkan pesta pernikahan yang yang memakai web sebagai media promosi. Disini kami menyediakan berbagai paket pernikahan dengan harga terjangkau dan pelayanan yang bagus.</p>
                    <br>
                    <h3 style="color:purple">Kontak Kami</h3>
                    <p>
                    <i class="far fa-envelope"></i> Cintyawedding@gmail.com
                    </p>
                    <p>
                    <i class="fas fa-phone"></i> (0334)889345
                    </p>
                    <!-- <div class="col s4"> -->
                    <!-- ------- caraosel ----- -->
                    <div class="carousel slide" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="img/gal1.png"></div>
                        <div class="carousel-item"><img src="img/gal2.png"></div>
                        <div class="carousel-item"><img src="img/gal3.png"></div>
                        <div class="carousel-item"><img src="img/gal5.png"></div>
                        <div class="carousel-item"><img src="img/gal4.png"></div>
                    <!-- </div> -->
                    </div>
    <!-- ------- caraosel ----- -->
        </div>
                </div>
            </div>
            <div class="col-6 pl-5">
                <h3 style="color:purple">Alamat</h3>
                    <p>Jl. Kapt. Kyai Ilyas 31A Lumajang</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.6962962683892!2d113.21658041428591!3d-8.132369494145893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6678a585d5db3%3A0x4598dffeffb08eb4!2sJl.%20Kapten%20Kyai%20Ilyas%2C%20Kec.%20Lumajang%2C%20Kabupaten%20Lumajang%2C%20Jawa%20Timur%2067316!5e0!3m2!1sid!2sid!4v1572189969157!5m2!1sid!2sid"
                    height="580" width="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div> 
            </div>
            </div>
        </section>
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/scripts.php' ?>
</body>

</html>