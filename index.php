<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'?>
<body>
	<?php include 'includes/navbar.php'?>
	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel" data-interval="7000">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/slider1.png"></div>
			<div class="carousel-item"><img src="img/slider2.png"></div>
			<div class="carousel-item"><img src="img/slider3.png"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	<!--- BOOTSTRAP UDEMY COURSE -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Login atau Register</h2>
				<p class="lead">Login terlebih dahulu untuk melakukan pemesanan. Register dahulu jika belum mempunyai akun</p>
				<a class="btn btn-purple btn-lg" href="login.php" target="_blank">Login</a>
				<a class="btn btn-purple btn-lg" href="register.php" target="_blank">Register</a>
			</div>
		</div>
	</div>
	<!--- BOOTSTRAP UDEMY COURSE -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">CINTYA WEDDING ORGANIZER</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/cgaleri.png" width="250" height="250">
						<h3>GALERI</h3>
						<p>Lihat berbagai galeri pada Cintya Wedding Organizer untuk referensi anda.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/cpaket.png" width="250" height="250">
						<h3>PAKET</h3>
						<p>Pilih paket wedding sesuai dengan keinginan anda.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/ctesti.png" width="250" height="250">
						<h3>TESTIMONI</h3>
						<p>Lihat testimoni dari pelanggan kami disini.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Cintya Wedding Organizer</h3>
				<p>Cintya wedding organizer merupakan salah satu upaya dalam membantu menyiapkan pesta pernikahan yang masih menggunakan pengelolaan secara manual mulai dari administrasi, pengelolaan data pemesanan, dan metode pembayaran. Proses manual tersebut sangat menyita waktu baik pengguna maupun pemilik Cintya Wedding Organizer seperti proses pemesanan yang pemesan diharuskan datang ke tempat untuk memilih paket yang akan dipilih.</p>
				<a class="btn btn-purple btn-lg" href="">Pesan Sekarang</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/4.jpg"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<?php include 'includes/footer.php' ?>

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->

</body>
</html>
