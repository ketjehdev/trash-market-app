<?php

include 'config.php';
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM pengepul WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO pengepul (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				header('Location: login.php');
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
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

	<!-- AOS link -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- end of AOS link -->

	<!-- title of cafe shop app -->
	<title>Register Pengepul | Market Sampah</title>
	<!-- end of title -->
</head>
<!-- end of head -->

<body oncontextmenu="return false;">

	<div class="banner d-flex" style="width: 100%; height: 100vh;">
		<div class="col-4 forum d-flex flex-column align-items-center">
			<img src="asset/img/logo.png"" class=" bg_forum">
			<h3 class="mt-4 mb-0 text-center">Market Sampah</h3>
			<p class="text-secondary text-center">- Register Pengepul -</p>

			<form action="" method="POST" style="width: 100%;" class="mx-2 mt-5">
				<span>Email <span class="text-danger">*</span></span>
				<input type="text" autofocus class="form-control mb-4" required placeholder="Masukan email kamu" name="email" value="<?= $_POST['email']; ?>">

				<span>Username <span class="text-danger">*</span></span>
				<input type="text" autofocus class="form-control mb-4" required placeholder="Masukan username kamu" name="username" value="<?= $_POST['username']; ?>">

				<span>Password <span class="text-danger">*</span></span>
				<input type="password" autofocus class="form-control mb-4" required placeholder="Masukan password kamu" name="password">

				<span>Confirm Password <span class="text-danger">*</span></span>
				<input type="password" class="form-control" required placeholder="Confirm Password" name="cpassword">

				<button class="btn btn-primary mt-4" style="width: 100%;" name="submit">Free Register</button>
				<p class="text-center">Sudah mempunyai akun pengepul? <br> <a href="login.php">Login pengepul</a></p>
			</form>
		</div>
		<div class="col-8 box-img bg-primary" style="height: 120vh;">
			<img src="asset/svg/register2.svg" class="bg">
		</div>
	</div>

	<!-- script cdn bootstrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<!-- end of script cdn bootstrap 5 -->
</body>

</html>