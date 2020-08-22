<?php
define('TITLE', 'Request');
define('PAGE', 'Request');
include('includes/header.php');
include('../db_conn.php');
session_start();
if (isset($_SESSION['is_adminlogin'])) {
	$aEmail = $_SESSION['aEmail'];
} else {
	echo "<script> location.href='login.php'</script>";
}
?>
<!-- Start 2nd Coloum-->
<div class="col-sm-4">
	<?php
	$sql = "SELECT id,request_info,request_desc,requester_email FROM submitrequest_tb";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo '<div class="card mt-5 mx-5">';
			echo '<div class="card-header">';
			echo 'Request Id:-' . $row['id'];
			echo '</div>';
			echo '<div class="card-body">';
			echo '<h5 class="card-title">Request Info:-' . $row['request_info'];
			echo '</h5>';
			echo '<p class="card-text">Request Desc:' . $row['request_desc'];
			echo '</p>';
			echo '<p class="card-text">Requester Email:-' . $row['requester_email'];
			echo '</p>';
			echo '<div class="float-right">';
			echo '<form action="" method="post">';
			echo '<input type="hidden" name="id" value=' . $row["id"] . '>';
			echo '<input type="submit" class="btn btn-danger mr-3" value="View" name="view">';
			echo '<input type="submit" class="btn btn-success mr-3" value="Close" name="close">';
			echo '</form>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
	}

	?>


</div>
<?php
if (isset($_REQUEST['view'])) {
	$sql = "SELECT * FROM submitrequest_tb WHERE id ='{$_REQUEST['id']}'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
}

if (isset($_REQUEST['close'])) {
	$q = "DELETE FROM `submitrequest_tb` WHERE  id='{$_REQUEST['id']}'";
	if ($con->query($q)) {
		echo '<meta http-equiv="refresh" contant="0;URL=?closed"/>';
	} else {
		echo "Unable to Delete";
	}
}
if (isset($_REQUEST['assign'])) {
	if (($_REQUEST['id'] == "") || ($_REQUEST['request_info'] == "") || ($_REQUEST['request_desc'] == "") || ($_REQUEST['rname'] == "") || ($_REQUEST['rtech'] == "") || ($_REQUEST['radd'] == "") || ($_REQUEST['raddr'] == "") || ($_REQUEST['rcity'] == "") || ($_REQUEST['rzip'] == "") || ($_REQUEST['rstate'] == "") || ($_REQUEST['remail'] == "") || ($_REQUEST['rnum'] == "") || ($_REQUEST['rdate'] == "")) {
		$msg = '<div class="alert alter-warning col-sm-6 ml-5 mt-2">Fill All Fileds</div>';
	} else {
		$rid = $_REQUEST['id'];
		$rinfo = $_REQUEST['request_info'];
		$rdesc = $_REQUEST['request_desc'];
		$rname = $_REQUEST['rname'];
		$rt = $_REQUEST['rtech'];
		$ra = $_REQUEST['radd'];
		$rar = $_REQUEST['raddr'];
		$rc = $_REQUEST['rcity'];
		$rz = $_REQUEST['rzip'];
		$rs = $_REQUEST['rstate'];
		$re = $_REQUEST['remail'];
		$rn = $_REQUEST['rnum'];
		$rd = $_REQUEST['rdate'];
		$sql = "INSERT INTO `assignwork_tb`(`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_tech`, `requester_add1`, `requester_add2`, `requester_city`, `requester_zip`, `requester_state`, `requester_email`, `requester_phn`,`requester_date`) VALUES ('$rid','$rinfo','$rdesc','$rname','$rt','$ra','$rar','$rc','$rz','$rs','$re','$rn','$rd')";
		if ($con->query($sql)) {
			$msg = "<div class='alert-alter success col-sm-6 ml-5 mt-2'>Update Successfully</div>";
		} else {
			$msg = "<div class='alert-alter warning col-sm-6 ml-5 mt-2'> Unable to Update Successfully</div>";
		}
	}
}
?>
<!-- End 2nd Coloum-->
<!--Start 3rd Coloum-->
<div class="col-sm-5 mt-5 jumbotron">
	<!--Start Service Request From 2nd Coloum--->
	<form action="" class="mx-5" method="POST">
		<h5 class="text-center">Assign Work Order Request</h5>
		<div class="form-group">
			<label>Request Id</label>
			<input type="text" name="id" placeholder="Request Id" readonly value="<?php if (isset($row['id'])) echo $row['id']; ?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="inputRequestInfo">Request Info</label>
			<input type="text" class="form-control" name="request_info" id="inputRrNameequestInfo" placeholder="Request Info" value="<?php if (isset($row['request_info'])) echo $row['request_info']; ?>" readonly>
		</div>
		<div class="form-group">
			<label for="inputRequestDes">Description</label>
			<input type="text" class="form-control" name="request_desc" id="inputRequestDes" placeholder="Write Description" value="<?php if (isset($row['request_desc'])) echo $row['request_desc']; ?>">
		</div>

		<div class="form-group">
			<label for="rname">Name</label>
			<input type="text" class="form-control" name="rname" id="rname" value="<?php if (isset($row['requester_name'])) echo $row['requester_name']; ?>">
		</div>
		<div class="form-group">
			<label for="rtech">Assign The Technician </label>
			<input type="text" class="form-control" name="rtech" id="rtech" placeholder="">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="add">Address Line 1</label>
				<input type="text" class="form-control" name="radd" id="radd" placeholder="House No.123" value="<?php if (isset($row['requester_add1'])) echo $row['requester_add1']; ?>">
			</div>
			<div class="form-group col-md-6">
				<label for="raddr">Address Line 2</label>
				<input type="text" class="form-control" name="raddr" id="raddr" placeholder="Colony No." value="<?php if (isset($row['requester_add2'])) echo $row['requester_add2']; ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="rcity">City</label>
				<input type="text" class="form-control" name="rcity" id="rcity" placeholder="Colony No." value="<?php if (isset($row['requester_city'])) echo $row['requester_city']; ?>">
			</div>
			<div class="form-group col-md-6">
				<label for="rzip">Zipcode</label>
				<input type="text" name="rzip" id="rzip" class="form-control" onkeypress="isInputNumber(event)" value="<?php if (isset($row['requester_zip'])) echo $row['requester_zip']; ?>">
			</div>
			<div class="form-group col-md-12">
				<label for="rstate">State</label>
				<input type="text" name="rstate" id="rstate" class="form-control" placeholder="Love My State" value="<?php if (isset($row['requester_state'])) echo $row['requester_state']; ?>">
			</div>

		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for=remail>Email</label>
				<input type="email" name="remail" id="remail" class="form-control" placeholder="iamsuman@gmail.com" value="<?php if (isset($row['requester_email'])) echo $row['requester_email']; ?>">
			</div>
			<div class="form-group col-md-4">
				<label>Phone Number:</label>
				<input type="number" name="rnum" id="rnum" class="form-control" value="<?php if (isset($row['requester_phn'])) echo $row['requester_phn']; ?>"><br>
			</div>
			<div class="form-group col-md-12">
				<label for="rdate">Date</label>
				<input type="date" name="rdate" id="order_date" class="form-control input-sm" placeholder="Enter Date" />
			</div>
			<!-- <script>
						$(document).ready(function() {
							$("#order_date").datepicker();
							format:"yyyy-mm-dd";
							autoload:true
						} );
					</script>    -->
			<div class="float-right">
				<button type="submit" class="btn btn-success" value="submit" name="assign">Assign</button>
				<button type="reset" class="btn btn-secondary" value="reset">Reset</button>
			</div>

	</form>
	<?php if (isset($msg)) {
		echo $msg;
	} ?>
</div>
</div>
<?php
include('includes/footer.php');
?>
<!--End 3rd Coloum-->