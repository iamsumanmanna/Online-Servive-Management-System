<?php
define('TITLE','Work Request');
define('PAGE','work');
include('includes/header.php');
include('../db_conn.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
	$aEmail = $_SESSION['aEmail'];

}else{
	echo "<script> location.href='login.php'</script>";
}
?>
<div class="col-sm-9 col-md-10 mt-5">
	<?php
		$sql="SELECT * FROM assignwork_tb";
		$result=$con->query($sql);
		if($result->num_rows > 0){
			echo '<table class="table">';
			echo '<thead>';
			echo '<tr>';
			echo '<th scope="col">Req Id</th>';
			echo '<th scope="col">Req Info</th>';
			echo '<th scope="col">Req Desc</th>';
			echo '<th scope="col">Name</th>';
			echo '<th scope="col">Address</th>';
			echo '<th scope="col">City</th>';
			echo '<th scope="col">Mobile</th>';
			echo '<th scope="col">Technician</th>';
			echo '<th scope="col">Action</th>';
			echo'</tr>';
			echo'</thead>';
			echo '<tbody>';
			while($row= $result->fetch_assoc()){
				echo'<tr>';
				echo'<td>'.$row['request_id'].'</td>';
				echo'<td>'.$row['request_info'].'</td>';
				echo'<td>'.$row['request_desc'].'</td>';
				echo'<td>'.$row['requester_name'].'</td>';
				echo'<td>'.$row['requester_add1'].'</td>';
				echo'<td>'.$row['requester_city'].'</td>';
				echo'<td>'.$row['requester_phn'].'</td>';
				echo'<td>'.$row['requester_tech'].'</td>';
				echo'<td>';
				echo'<form action="viewassignwork.php" method="POST">';

				echo'<input type="hidden" name="id" value='.$row['request_id'].'><button class="btn btn-warning" name="view" value="View" type="submit"><i class="fa fa-eye" aria-hidden="true"></i></button>';
				echo'</form>';
				echo'</td';
				echo'</tr>';
			}
			echo '</tbody>';
			echo'</table>';
		}

	?>

</div>
<?php  
include('includes/footer.php');

?>