<!DOCTYPE html>
<html>
<?php include 'includes/head.php'?>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimoni</title>
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
    .btn {
        background-color: dodgerblue;
        color: white;
        padding: 15px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }
    .rating {
        float:left;
    }
    .rating:not(:checked) > input {
        position:absolute;
        top:-9999px;
        clip:rect(0,0,0,0);
    }

    .rating:not(:checked) > label {
        float:right;
        width:1em;
        padding:0 .1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:200%;
        line-height:1.2;
        color:#ddd;
        text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
    }   

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: #f70;
        text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: gold;
        text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
        color: #ea0;
        text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
    }

    .rating > label:active {
        position:relative;
        top:2px;
        left:2px;
    }
</style>
    <?php include 'includes/navbar.php' ?>
    <section class="gallery-block grid-gallery">
        <div class="container">
            <h1 class="text-center" style="margin-top:30px; margin-bottom:30px">Testimoni</h1>
            <div class="card" style="background-color: rgba(0, 0, 0, 0.37)">
                <div class="card-body" style="color: white">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="proses/" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control form-control-block" name="namauser">
                                </div>
                                <div class="form-group">
                                    <label>Nama Paket</label>
                                    <input type="text" class="form-control form-control-block" name="namapaket">
                                </div>
                                <div class="form-group">
                                    <fieldset class="rating">
                                        <legend>Please rate:</legend>
                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                                    </fieldset></br></br></br></br>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Komentar</label>
                                    <textarea class="form-control form-control-block" name="komentar" placeholder="Berikan komentar anda" style="height:200px"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" style="float:center" name="login">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="text-center" style="margin-top:30px; margin-bottom:30px">What our customers are saying</h1>
            <div class="card" style="background-color: rgba(0, 0, 0, 0.37)">
                <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="testimoni" style="border: 2px solid #ccc; background-color: #eee; border-radius: 5px; padding: 16px; margin: 16px 0">
								<i class='fas fa-user' style='font-size:48px; width:90px; float: left; margin-left: 20px; margin-right: 20px; border-radius: 50%;'></i>
  								<p><span style="font-size: 20px;margin-right: 15px;">Rebecca Flex.</span> CEO at Company.</p>
  								<p>No one is better than John Doe.</p>
							</div>
							<div class="testimoni" style="border: 2px solid #ccc; background-color: #eee; border-radius: 5px; padding: 16px; margin: 16px 0">
								<i class='fas fa-user' style='font-size:48px; width:90px; float: left; margin-left: 20px; margin-right: 20px; border-radius: 50%;'></i>
  								<p><span style="font-size: 20px;margin-right: 15px;">Rebecca Flex.</span> CEO at Company.</p>
  								<p>No one is better than John Doe.</p>
							</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $('#myCarousel').carousel({
            interval: 4000
        });
    </script>
    <?php include 'includes/footer.php' ?>
</body>

</html>