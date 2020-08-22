<?php
define('TITLE','dashboard');
define('PAGE','dashboard');
include('includes/header.php');
include('../db_conn.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
	$aEmail = $_SESSION['aEmail'];

}else{
	echo "<script> location.href='login.php'</script>";
}

?>

					<div class="col-sm-9 col-md-10"><!--start deshboard 2 coloum-->
						<div class="row text-center mx-5">
							<div class="col-sm-4 mt-5">
								<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
									<div class="card-header">Request Received</div>
									<div class="card-body">
									<h4 class="card-title">43</h4>
									<a class="btn text-white"href="#">View</a>	
									</div>
								</div>	
							</div>
							
						
							<div class="col-sm-4 mt-5">
								<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
									<div class="card-header">Assigned Work</div>
									<div class="card-body">
									<h4 class="card-title">25</h4>
									<a class="btn text-white" href="#">View</a>	
									</div>
								</div>	
							</div>
						
							<div class="col-sm-4 mt-5">
								<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
									<div class="card-header">No. Of Technician </div>
									<div class="card-body">
									<h4 class="card-title">78</h4>
									<a class="btn text-white"href="#">View</a>
										
									</div>	
								</div>	
							</div>
						</div>
						<div class="mx-5 mt-5 text-center">
							<p class="bg-dark text-white p-2">List Of Requester</p>
							<?php
								$sql="SELECT * FROM tb_my_db";
								$q=$con->query($sql);
								if($q->num_rows > 0){
								echo'
								<table class="table">
									<thead>
										<tr>
											<th scope="col">Requester ID</th>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
										</tr>
									</thead>
									<tbody>';
										while($row = $q->fetch_assoc()){
										echo '<tr>';
											echo '<td>'.$row ["id"].'</td>';
											echo '<td>'.$row ["name"].'</td>';
											echo '<td>'.$row ["email"].'</td>';
										 echo '</tr>';
											}
									 echo'</tbody>
								</table>';
							}else{
								echo '0 Result';
							}

							?>
						</div>
					</div><!--End deshboard 2 coloum-->
<?php
include('includes/footer.php');


?>
