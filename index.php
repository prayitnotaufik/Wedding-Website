<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Cintya Wedding Organizer</title>
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php include 'includes/navbar.php'?>
	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/laptop.png"></div>
			<div class="carousel-item"><img src="img/sky.png"></div>
			<div class="carousel-item"><img src="img/bridge.png"></div>
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
						<img src="img/galeri.png" width="250" height="250">
						<h3>GALERI</h3>
						<p>Lihat berbagai galeri pada Cintya Wedding Organizer untuk referensi anda.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/paket.png" width="250" height="250">
						<h3>PAKET</h3>
						<p>Pilih paket wedding sesuai dengan keinginan anda.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/testimoni.png" width="250" height="250">
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

	<!--- Start Footer -->
	<footer>
		<div class="container">
			<div class="row text-center py-5">
				<div class="col-md-4">
					<h3 class="text-center">ADDRESS</h3>
					<p>Jl. Kapt. Kyai Ilyas 31A Lumajang</p>
				</div>
				<div class="col-md-4">
					<h3 class="text-center">CONTACT INFO</h3><strong>Contact Info</strong>
					<p><img src="img/logo_telp.png" width="20" height="20"> (888) 888-8888<br>
					<img src="img/email.jpg" width="20" height="15"> cintyawedding@gmail.com</p>
				</div>
				<div class="col-md-4 pb-5">
					<h3 class="text-center">CONNECT WITH US</h3><br>
					<a class="btn btn-outline-light btn-lg" href="">W3NEWBIE COURSES</a>
				</div>
			</div><!--- End of Row -->
		</div><!--- End of Container -->
	</footer>
	<!--- End of Footer -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->

</body>
</html>
