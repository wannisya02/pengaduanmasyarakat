<?php
require 'conn/koneksi.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<link rel="shortcut icon" href="https://cepatpilih.com/image/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

</head>

<body style="background: url(img/bahan.png); background-size: cover;">


	<div class="card" style="padding: 50px; width: 50%; margin: 0 auto; ">
		<h3 style="text-align: center;" class="darkgrey-text">Daftar Akun</h3>
		<form method="POST">
			<div class="input_field">
				<label for="nik">NIK</label>
				<input id="nik" type="number" name="nik" required>
			</div>
			<div class="input_field">
				<label for="nama">Nama</label>
				<input id="nama" type="text" name="nama" required>
			</div>
			<div class="input_field">
				<label for="username">Username</label>
				<input id="username" type="text" name="username" required>
			</div>
			<div class="input_field">
				<label for="password">Password</label>
				<input id="password" type="password" name="password" required>
			</div>
			<div class="input_field">
				<label for="telp">Telepon</label>
				<input id="telp" type="text" name="telp" required>
			</div>


			<input type="submit" name="simpan" value="Daftar Disini!" class="btn grey" style="width: 100%;">


		</form>
		<?php
		if (isset($_POST['simpan'])) {
			$password = md5($_POST['password']);

			$query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('" . $_POST['nik'] . "','" . $_POST['nama'] . "','" . $_POST['username'] . "','" . $password . "','" . $_POST['telp'] . "')");
			if ($query) {
				echo "<script>alert('berhasil silahkan login')</script>";
				echo "<script>location='index.php'</script>";
			}
		}
		?>


	</div>