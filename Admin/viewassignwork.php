<?php 
define('TITLE','Submit Request');
define('PAGE','SubmitRequester');
include('includes/header.php');
include('../db_conn.php');
session_start();
	if($_SESSION['is_login']){
		$rEmail=$_SESSION['rEmail'];
}
else{
	echo "<script> location.href='login.php'</script>";
}
?>
<!---Start 2nd Coloum--->
<div class="col-sm-6 mt-5 mx-5">
	<h3 class="text-center">Asign Worker Details</h3>
	<?php
		if(isset($_REQUEST['view'])){
			$sql="SELECT * FROM `assignwork_tb` WHERE request_id='{$_REQUEST['id']}'";
			$result=$con->query($sql);
			$row = $result->fetch_assoc();
		}
	?>
</div>
<!---End 2nd Coloum--->
<?php
include('includes/footer.php');
?>