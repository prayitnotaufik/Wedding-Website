<?php include 'config/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>

<body>
	<?php include 'includes/navbar.php' ?>
	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel" data-interval="5000">
			<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/slider1.png"></div>
			<div class="carousel-item"><img src="img/slider2.png"></div>
			<div class="carousel-item"><img src="img/slider3.png"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	<?php
	if (isset($username)) { ?>

	<?php } else { ?>
		<!--- BOOTSTRAP UDEMY COURSE -->
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-5">
				<iframe class="embed-responsive-item" style="margin-top:10px" width="560" height="315" src="https://www.youtube.com/embed/ZrB83XtL0qA?autoplay=1"
				frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
				</div>
				<div class="col-5" style="margin-top : 40px; margin-left:140px">
					<h2>Login atau Register</h2>
					<p class="lead">Login terlebih dahulu untuk melakukan pemesanan. Register dahulu jika belum mempunyai akun</p>
					<a class="btn btn-purple btn-lg" href="login.php" target="_blank">Login</a>
					<a class="btn btn-purple btn-lg" href="register.php" target="_blank">Register</a>
				</div>
			</div>
		</div>
		<!--- BOOTSTRAP UDEMY COURSE -->
	<?php } ?>


	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3 comforta">Yuk! Lihat Lebih Lanjut</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-6">
					<div class="feature">
						<a href="galeri.php"><img src="img/cgaleri.png" width="250" height="250"></a>
						<h3>GALERI</h3>
						<p>Lihat berbagai galeri pada Cintya Wedding Organizer untuk referensi anda.</p>
					</div>

				</div>
				<div class="col-10 col-md-6">
					<div class="feature">
						<a href="paket.php"><img src="img/cpaket.png" width="250" height="250"></a>
						<h3>PAKET</h3>
						<p>Pilih paket wedding sesuai dengan keinginan anda.</p>
					</div>
				</div>
			</div>
			<!--- End Row -->
		</div>
		<!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4 comforta">Cintya Wedding Organizer</h3>
				<p>Cintya wedding organizer merupakan salah satu upaya dalam membantu menyiapkan pesta pernikahan yang masih menggunakan pengelolaan secara manual mulai dari administrasi, pengelolaan data pemesanan, dan metode pembayaran. Proses manual tersebut sangat menyita waktu baik pengguna maupun pemilik Cintya Wedding Organizer seperti proses pemesanan yang pemesan diharuskan datang ke tempat untuk memilih paket yang akan dipilih.</p>
				<a class="btn btn-purple btn-lg" style="margin-left:0%" href="paket.php">Pesan Sekarang</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/4.jpg"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<?php include 'includes/footer.php' ?>
	<?php include 'includes/scripts.php' ?>



</body>

</html>