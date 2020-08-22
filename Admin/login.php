<?php
include('../db_conn.php');
session_start();
if (!isset($_SESSION['is_adminlogin'])) {
	if (isset($_REQUEST['aEmail'])) {
		$aEmail = $_REQUEST['aEmail'];
		$aPassword = $_REQUEST['aPassword'];
		$q = "SELECT  `admin_email`, `admin_password` FROM `adminlogin_tb` WHERE admin_email='$aEmail' AND admin_password='$aPassword' limit 1";
		$res = $con->query($q);
		if ($res->num_rows == 1) {
			$_SESSION['is_adminlogin'] = true;
			$_SESSION['aEmail'] = $aEmail;
			$msg = "<script> location.href='dashboard.php';</script>";
			exit;
		} else {
			$msg = '<div class="alert alert-warning mt-2"> Enter Vaild Email and Password</<div>';
		}
	}
} else {
	$msg = "<script> location.href='dashboard.php';</script>";
}


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<!--Bootstrap Css-->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/all.min.css">
</head>

<body>
	<div class="mt-5 mb-3 text-center" style="font-size: 40px">
		<i class="fas fa-stethoscope"></i>
		<span>Online Sevice Managment System</span>
	</div>
	<p class="text-center" style="font-size: 20px">Admin Area(Demo)</p>
	<div class="container-fluid">
		<div class="row justify-content-center mt-5">

			<div class="col-sm-6 col-md-4">
				<form action="" class="shadow-lg p-4" method="POST">
					<div class="form-group">
						<i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email:</label>
						<input type="email" class="form-control" placeholder="Email" name="aEmail">
					</div>
					<div class="form-group">
						<i class="fas fa-key"></i><label for="password" class="font-weight-bold pl-2">Password:</label>
						<input type="password" class="form-control" placeholder="Password" name="aPassword">
					</div>
					<button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block shadow-sm">Login</button>
					<?php if (isset($msg)) {
						echo $msg;
					} ?>
				</form>
				<div class="text-center"><a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
			</div>
		</div>
	</div>

	<!--java Script--->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/all.min.js"></script>
</body>

</html>