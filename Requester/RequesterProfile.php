<?php
define('TITLE', 'Profile');
define('PAGE', 'RequesterProfile');
include('includes/header.php');
include('../db_conn.php');
session_start();
if ($_SESSION['is_login']) {
	$rEmail = $_SESSION['rEmail'];
} else {
	echo "<script> location.href='RequesterLogin.php'</script>";
}
$q = "SELECT * FROM tb_my_db WHERE email='$rEmail'";
//$q="SELECT  FROM 'tb_my_db' WHERE email='$rEmail'";
$res = $con->query($q);
$row = $res->fetch_assoc();
$rName = $row['name'];


if (isset($_REQUEST['nameupdate'])) {
	if ($_REQUEST['rName'] == "") {
		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert"> Fill all Fields</<div>';
	} else {
		$rName = $_REQUEST['rName'];
		$q = "UPDATE tb_my_db SET name='$rName' WHERE email='$rEmail'";
		if ($con->query($q) == true) {
			$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Update Successfully<div>';
		} else {
			$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2"> Unable to Update<div>';
		}
	}
}

?>

<div class="col-sm-8 mt-5">
	<form action="" method="POST" class="mx-5">
		<div class="form-group">
			<label for="rEmail" class="font-weight-bold pl-2">Email:</label>
			<input type="email" class="form-control" name="rEmail" id="rEmail" value="<?php echo $rEmail; ?>">
		</div>
		<div class="form-group">
			<label for="rName" class="font-weight-bold pl-2">Name:</label>
			<input type="text" class="form-control" name="rName" id="rName" value="<?php echo $row['name'] ?>"><br>
			<button type="submit" class="btn btn-info btn-md ml-0 mb-5" name="nameupdate">Update</button>
		</div>
		<?php if (isset($passmsg)) {
			echo $passmsg;
		} ?>
	</form>

</div>
<?php
include('includes/footer.php');
?>