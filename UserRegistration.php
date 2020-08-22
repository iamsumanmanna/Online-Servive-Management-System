<?php
include('db_conn.php');
if (isset($_REQUEST['rSignup'])) {
	if (($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")) {
		$msg = '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
	} else {
		$rName = $_REQUEST['rName'];
		$rEmail = $_REQUEST['rEmail'];
		$rPassword = $_REQUEST['rPassword'];
		$q = "INSERT INTO `tb_my_db`(`name`, `email`, `password`) VALUES ('$rName','$rEmail','$rPassword')";
		if ($con->query($q) == TRUE) {
			$msg = '<div class="alert alert-sccuess mt-2" role="alert">Account Succefully Created</div>';
		} else {
			$msg = '<div class="alert alert-sccuess mt-2" role="alert">Unable to Created Account</div>';
		}
	}
}
?>

<div class="container">


	<!--Section: Content-->
	<section class="dark-grey-text">


		<!--Grid row-->
		<div class="row d-flex justify-content-center">

			<!--Grid column-->
			<div class="col-md-6" id="registration">


				<!-- Default form subscription -->
				<form action="" class="shadow-lg p-4" method="POST">
					<h3 class="font-weight-bold mb-4 pb-2 text-center" style="font-size: 30px; font-family: 'Amita';">User Registration Here</h3>

					<div class="form-group">
						<i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
						<input type="text" class="form-control" placeholder="Name" name="rName">
					</div>
					<div class="form-group">
						<i class="fas fa-key"></i><label for="name" class="font-weight-bold pl-2">Email</label>
						<input type="email" class="form-control" placeholder="Email" name="rEmail">
					</div>
					<div class="form-group">
						<i class="fas fa-key"></i><label for="name" class="font-weight-bold pl-2"> New Password</label>
						<input type="password" class="form-control" placeholder="Password" name="rPassword" required="password">
					</div>
					<button type="submit" class="btn btn-info btn-block mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign & Up</button>
					<?php if (isset($msg)) {
						echo $msg;
					} ?>
				</form>
				<!-- Default form subscription -->

			</div>
			<!--Grid column-->

		</div>
		<!--Grid row-->


	</section>
	<!--Section: Content-->


</div>