<?php
define('TITLE','Requester');
define('PAGE','requester');
include('includes/header.php');
include('../db_conn.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
	$aEmail = $_SESSION['aEmail'];

}else{
	echo "<script> location.href='login.php'</script>";
}
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
	<p class="bg-dark text-white p-2">List Of Requesters</p>
<?php 
	$sql=" SELECT * FROM tb_my_db ";
	$result = $con->query($sql);
	if($result->num_rows > 0)
{
		echo '<table class="table">';
		 echo '<thead>';
			echo '<tr>';
				echo '<th scope="col"> Requester ID </th>';
				echo '<th scope="col"> Name </th>';
				echo '<th scope="col"> Email </th>';
				echo '<th scope="col"> Action </th>';
			echo '</tr>';
		 echo '</thead>';
		   echo '<tbody>';
		while($row = $result -> fetch_assoc())
		{
			echo '<tr>';
			 echo  '<td>'.$row["id"].'</td>';
			 echo  '<td>'.$row["name"].'</td>';
			 echo  '<td>'.$row["email"].'</td>';
			 echo '<td>';
			 	echo '<form action ="editreq.php" method="post">';
			 		echo '<input type="hidden" name="request_id" value='.$row["id"].'><button type="submit" class="btn btn-info mr-3" name="edit" value="Edit"><i class="fas fa-pen"></i></button>';

			 	echo '<form>';
			 echo '</td>';
			 echo '</tr>';

		}
		   echo '</tbody>';
		echo '</table>';
}

?>	
</div>
<?php  
include('includes/footer.php');

?>