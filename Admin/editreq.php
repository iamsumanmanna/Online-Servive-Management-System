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
<!--Start 2nd Coloum--->
<div class=" mt-5 col-sm-6 jumbotron">
	<h3 class="text-center">Update Requester Details</h3>
	
		<?php
			if(isset($_REQUSET['edit'])){
				$sql="SELECT * FROM tb_my_db WHERE id = {$_REQUEST['request_id']}";
				$result = $con->query($sql);
				$row = $result->fetch_assoc();
				if(isset($_REQUEST['resupdate'])){
					if(($_REQUEST['id']=="")||($_REQUEST['name']=="")||($_REQUEST['email']=="")){
						$msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2"> Fill all Fields</div>';
					 } else {
								$rid =$_REQUEST['request_id'];
								$rn =$_REQUEST['name'];
								$re =$_REQUEST['email'];
							
								$sql = "UPDATE tb_my_db SET id = '$rid',email='$re'";
								$con->query($sql);
				}
			}
		}
		?>
		<form action="" method="POST">
			<div class="form-group">	
				<label for="id">Requester Id</label>
				<input type="text" name="id" id="id" class="form-control" value="<?php if(isset($row['id'])) echo $row['id'];?>">				
			</div>  
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control" value="<?php if(isset($row['name'])) echo $row['name'];?>" >				
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" value="<?php if(isset($row['email'])) echo $row['email'];?>">				
			</div>
			<div class="text-center">
				<button type="submit" name="resupdate" value="resupdate" class="btn btn-danger">UPDATE</button>
				<a href="requester.php" class="btn btn-secondary">CLOSE</a>
			</div>
		</form>
</div>
<!--End 2nd Coloum--->

<?php  
include('includes/footer.php');
?>