<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	if ($_SESSION['role'] == 'Pengepul') {
		header("Location: welcome.php");
	} else {
		header("Location: ./user/dash.php");
	}
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$result_user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
	$result_pengepul = mysqli_query($conn, "SELECT * FROM pengepul WHERE email = '$email'");

	// cek email
	if (mysqli_num_rows($result_user) === 1) {
		// cek pw
		$item_user = mysqli_fetch_assoc($result_user);

		if ($item_user['password'] == $password) {
			$_SESSION["username"] = $item_user['username'];
			$_SESSION["role"] = 'Member';
			header("Location: ./user/dash.php");
		}
	}

	// cek email
	if (mysqli_num_rows($result_pengepul) === 1) {
		// cek pw
		$item_pengepul = mysqli_fetch_assoc($result_pengepul);

		if ($item_pengepul['password'] == $password) {
			$_SESSION["username"] = $item_pengepul['username'];
			$_SESSION["role"] = 'Pengupul';
			header("Location: register.php");
		}
	}
	$error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- cdn bootstrap 5 link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- end cdn bootstrap 5 link -->

	<!-- link login css -->
	<link rel="stylesheet" href="css/login.css">
	<!-- end of link login css -->

	<!-- link splash css -->
	<link rel="stylesheet" href="css/splash.css">
	<!-- end of link splash css -->

	<!-- AOS link -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- end of AOS link -->

	<!-- title of cafe shop app -->
	<title>Login | Market Sampah</title>
	<!-- end of title -->
</head>
<!-- end of head -->

<body oncontextmenu="return false;">

	<!-- splash screen -->
	<div class="splash" style="background-color: #fff;">
		<img src="asset/img/logo.png" class="fade-in">
	</div>
	<!-- end splash screen -->

	<div class="banner d-flex" style="width: 100%; height: 100vh;">
		<div class="col-8 box-img bg-primary">
			<img src="asset/img/Data_security_27.jpg" class="bg">
		</div>
		<div class="col-4 forum d-flex flex-column align-items-center">
			<img src="asset/img/logo.png" alt="" class="bg_forum">
			<h3 class="mt-4 mb-0 text-center">Market Sampah</h3>
			<p class="text-secondary text-center">- Login Page -</p>
			<?php if (isset($error)) : ?>
				<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert" style="width: 100%">
					username atau password salah
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>
			<form action="" method="POST" style="width: 100%;" class="mx-2 mt-5">

				<span>Email <span class="text-danger">*</span></span>
				<input type="text" autofocus class="form-control mb-4" required placeholder="Masukan email kamu" name="email" value="<?= $_POST['email']; ?>">

				<span>Password <span class="text-danger">*</span></span>
				<input type="password" class="form-control" required placeholder="Masukan password kamu" name="password">

				<button class="btn btn-primary mt-4" style="width: 100%;" name="submit">Masuk</button>
				<p class="text-center">Belum mempunyai akun member? <br> <a href="register.php">Daftar member</a></p>
			</form>
		</div>
	</div>

	<!-- script cdn bootstrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<!-- end of script cdn bootstrap 5 -->

	<!-- script splash screen -->
	<script src="js/splash.js"></script>
	<!-- end script splash screen -->
</body>

</html>