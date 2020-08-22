<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequester');
include('includes/header.php');
include('../db_conn.php');
session_start();
if ($_SESSION['is_login']) {
	$rEmail = $_SESSION['rEmail'];
} else {
	echo "<script> location.href='RequesterLogin.php'</script>";
}
if (isset($_REQUEST['submitrequest'])) {
	if (($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdes'] == "") || ($_REQUEST['rname'] == "") || ($_REQUEST['radd'] == "") || ($_REQUEST['raddr'] == "") || ($_REQUEST['rcity'] == "") || ($_REQUEST['rstate'] == "") || ($_REQUEST['rzip'] == "") || ($_REQUEST['remail'] == "") || ($_REQUEST['rnum'] == "")) {

		$msg = "<div class='alert-alert warning col-sm-6 ml-5 mt-2'>ALL Filed are Required</div>";
	} else {
		$info = $_REQUEST['requestinfo'];
		$des = $_REQUEST['requestdes'];
		$name = $_REQUEST['rname'];
		$add = $_REQUEST['radd'];
		$addr = $_REQUEST['raddr'];
		$city = $_REQUEST['rcity'];
		$state = $_REQUEST['rstate'];
		$zip = $_REQUEST['rzip'];
		$email = $_REQUEST['remail'];
		$num = $_REQUEST['rnum'];

		$sql = "INSERT INTO `submitrequest_tb`(`request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_phn`) VALUES ('$info','$des','$name','$add','$addr','$city','$state','$zip','$email','$num')";
		if ($con->query($sql) == TRUE) {

			$msg = "<div class='alert-alert warning col-sm-6 ml-5 mt-2'>Request Submited Sucessfully</div>";
		} else {
			$msg = "<div class='alert-alert warning col-sm-6 ml-5 mt-2'> Unable to Request Submited Sucessfully</div>";
		}
	}
}
?>
<div class="col-sm-9 col-md-10 mt-5">
	<!--Start Service Request From 2nd Coloum--->
	<form action="" class="mx-5" method="POST">
		<div class="form-group">
			<label for="inputRequestInfo">Request Info</label>
			<input type="text" class="form-control" name="requestinfo" id="inputRrNameequestInfo" placeholder="Request Info">
		</div>
		<div class="form-group">
			<label for="inputRequestDes">Description</label>
			<input type="text" class="form-control" name="requestdes" id="inputRequestDes" placeholder="Write Description">
		</div>

		<div class="form-group">
			<label for="rname">Name</label>
			<input type="text" class="form-control" name="rname" id="rname" placeholder="Suman">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="add">Address Line 1</label>
				<input type="text" class="form-control" name="radd" id="radd" placeholder="House No.123">
			</div>
			<div class="form-group col-md-6">
				<label for="raddr">Address Line 2</label>
				<input type="text" class="form-control" name="raddr" id="raddr" placeholder="Colony No.">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="rcity">City</label>
				<input type="text" class="form-control" name="rcity" id="rcity" placeholder="Colony No.">
			</div>
			<div class="form-group col-md-4">
				<label for="rstate">State</label>
				<input type="text" name="rstate" id="rstate" class="form-control" placeholder="Love My State">
			</div>
			<div class="form-group col-md-2">
				<label for="rzip">Zipcode</label>
				<input type="text" name="rzip" id="rzip" class="form-control" onkeypress="isInputNumber(event)">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for=remail>Email</label>
				<input type="email" name="remail" id="remail" class="form-control" placeholder="iamsuman@gmail.com">
			</div>
			<div class="form-group col-md-6">
				<label>Phone Number:</label>
				<input onkeypress="isInputNumber(event)" class="form-control" type="text" name="rnum" id="phonenumber" placeholder="xxxx-xxx-xxxx" maxlength="11" />
			</div>
		</div>
		<button type="submit" class="btn btn-info btn-md ml-0 mb-5" value="submit" name="submitrequest">Submit</button>
		<button type="reset" class="btn btn-secondary btn-md ml-0 mb-5" value="reset">Reset</button>
		<?php if (isset($msg)) {
			echo $msg;
		} ?>
	</form>

</div>
</div>
</div>
<!--End Service Request From 2nd Coloum--->
<script>
	function isInputNumber(evt) {
		var ch = String.fromCharCode(evt.which);
		if (!(/[0-9]/.test(ch))) {
			evt.preventDefault();
		}
	}
</script>
<?php
include('includes/footer.php');
?>