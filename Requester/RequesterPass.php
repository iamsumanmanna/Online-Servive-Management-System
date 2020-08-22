<?php
define('TITLE', 'Change Password');
define('PAGE', 'RequesterPass');
include('includes/header.php');
include('../db_conn.php');
session_start();
if ($_SESSION['is_login']) {
	$rEmail = $_SESSION['rEmail'];
} else {
	echo "<script> location.href='RequesterLogin.php'</script>";
}
$rEmail = $_SESSION['rEmail'];
if (isset($_REQUEST['rupdate'])) {
	if ($_REQUEST['rpass'] == "") {
		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2"> Fill all Fields</div>';
	} else {
		$rPass = $_REQUEST['rpass'];
		$sql = "UPDATE tb_my_db SET password ='$rPass' WHERE  email='$rEmail'";
		if ($con->query($sql) == TRUE) {
			$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Update Sucessfully</div>';
		} else {
			$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"> Unable to Update Sucessfully</div>';
		}
	}
}

?>
<div class="col-sm-9 col-md-10">
	<form class="mt-5 mx-5" action="" method="post">
		<div class="form-group">
			<label for="inputEmail">Email</label>
			<input type="email" class="form-control" name="rEmail" id="inputEmail" value="<?php echo $rEmail; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="inputNewPassword">New Password</label>
			<input type="password" class="form-control" name="rpass" id="inputNewPassword" placeholder="New Password">
		</div>
		<button type="submit" class="btn btn-info btn-md ml-0 mb-5 " value="submit" name="rupdate">Update</button>
		<button type="reset" class="btn btn-secondary  btn-md ml-0 mb-5" value="reset">Reset</button>
		<?php if (isset($passmsg)) {
			echo $passmsg;
		} ?>

	</form>
</div>

<?php
include('includes/footer.php');
?>