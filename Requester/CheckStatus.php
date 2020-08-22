<?php
define('TITLE', 'Service Status');
define('PAGE', 'CheckStatus');
include('includes/header.php');
include('../db_conn.php');
?>
<div class="col-sm-8 mt-5 mx-3">
	<form action="" method="POST" class="d-print-none">
		<div class="form-group mr-5">
			<label for="checkid">Enter Request Id:-</label>
			<input type="text" class="form-control" name="checkid" id="checkid">
		</div>
		<button class="btn btn-danger" type="submit">Search</button>
	</form>
	<?php
	if (isset($_REQUEST['checkid'])) {
		if ($_REQUEST['checkid'] == "") {
			$msg = "Fill all Fileds";
		}
		$sql = "SELECT * FROM `assignwork_tb` WHERE request_id='{$_REQUEST['checkid']}'";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();

	?>
		<h3 class="text-center mt-5">Assign Work Details</h3>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td>Request Id</td>
					<td><?php if (isset($row['request_id'])) {
							echo $row['request_id'];
						} ?></td>
				</tr>
				<tr>
					<td>Request Info</td>
					<td><?php if (isset($row['request_info'])) {
							echo $row['request_info'];
						} ?></td>
				</tr>
				<tr>
					<td>Request Desc</td>
					<td><?php if (isset($row['request_desc'])) {
							echo $row['request_desc'];
						} ?></td>
				</tr>
				<tr>
					<td>Request Name</td>
					<td><?php if (isset($row['requester_name'])) {
							echo $row['requester_name'];
						} ?></td>
				</tr>
				<tr>
					<td>Assign Technician Name</td>
					<td><?php if (isset($row['requester_tech'])) {
							echo $row['requester_tech'];
						} ?></td>
				</tr>
				<tr>
					<td>Request Address</td>
					<td><?php if (isset($row['requester_add1'])) {
							echo $row['requester_add1'];
						} ?></td>
				</tr>
				<tr>
					<td>Request Landmark</td>
					<td><?php if (isset($row['requester_add2'])) {
							echo $row['requester_add2'];
						} ?></td>
				</tr>
				<tr>
					<td>Request City</td>
					<td><?php if (isset($row['requester_city'])) {
							echo $row['requester_city'];
						} ?></td>
				</tr>
				<tr>
					<td>Request Zip</td>
					<td><?php if (isset($row['requester_zip'])) {
							echo $row['requester_zip'];
						} ?></td>
				</tr>
				<tr>
					<td>Request State</td>
					<td><?php if (isset($row['requester_state'])) {
							echo $row['requester_state'];
						} ?></td>
				</tr>
				<tr>
					<td>Request Email</td>
					<td><?php if (isset($row['requester_email'])) {
							echo $row['requester_email'];
						} ?></td>
				</tr>
				<tr>
					<td>Request Phone No</td>
					<td><?php if (isset($row['requester_phn'])) {
							echo $row['requester_phn'];
						} ?></td>
				</tr>
				<tr>
					<td>Customer Sign</td>
					<td></td>
				</tr>
				<tr>
					<td>Technician Sign</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			<form action="" class="mb-3 d-print-none">
				<input type="submit" class="btn btn-danger" name="" value="Print" onclick="window.print()">
				<input type="submit" class="btn btn-secondary " name="" value="Close">
			</form>
		</div>
	<?php  } else {
		$msg = '<div class="alert alert-info mt-4">Request Still Pending</div>';
	}

	?>
</div>
<?php
include('includes/footer.php');
?>