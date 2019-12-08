<?php
include 'config/connection.php';
session_start();

@$username = $_SESSION["username"];
@$type = $_SESSION["type"];


$sql = "SELECT * FROM user WHERE type = '$type' ";
$hasil = mysqli_query($con, $sql);
$item = mysqli_fetch_assoc($hasil);
?>
<!--- Navigation -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php" style="margin-left:20px"><img src="img/lgcintya.png" width="100" height="50"></a>
		<button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<?php
				if (isset($username)) {
					if ($item["type"] == 'admin') { ?>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="index.php">Beranda</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="tentang.php">Tentang</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="testimoni.php">Testimoni</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="galeri.php">Galeri</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="admin-paket.php">Admin</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="proses/proses_logout.php">Logout</a>
						</li>
					<?php } else { ?>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="index.php">Beranda</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="tentang.php">Tentang</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="testimoni.php">Testimoni</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="galeri.php">Galeri</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="paket.php">Paket</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="status2.php">Pemesanan</a>
						</li>
						<li class="nav-item" style="margin-right:20px">
							<a class="nav-link" href="proses/proses_logout.php">Logout</a>
						</li>
					<?php } ?>
				<?php } else { ?>
					<li class="nav-item" style="margin-right:20px">
						<a class="nav-link" href="index.php">Beranda</a>
					</li>
					<li class="nav-item" style="margin-right:20px">
						<a class="nav-link" id="tentang" href="tentang.php">Tentang</a>
					</li>
					<li class="nav-item" style="margin-right:20px">
						<a class="nav-link" href="testimoni.php">Testimoni</a>
					</li>
					<li class="nav-item" style="margin-right:20px">
						<a class="nav-link" href="galeri.php">Galeri</a>
					</li>
					<li class="nav-item" style="margin-right:20px">
						<a class="nav-link" href="paket.php">Paket</a>
					</li>
					<li class="nav-item" style="margin-right:20px">
						<a class="nav-link" id="register" href="register.php">Register</a>
					</li>
					<li class="nav-item" style="margin-right:20px">
						<a class="nav-link" id="login" href="login.php">Login</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<!--- End Navigation -->