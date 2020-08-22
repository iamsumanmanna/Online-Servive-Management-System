<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo TITLE ?></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/all.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Include jQuery -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="mdb logo">
  <a class="navbar-brand" href="#">
    
  </a>
</nav>
	
  
	<div class="container-fluid" style="margin-top:13px;">
			<div class="row">
				<div class="sidebar-fixed py-5 col-md-2">
					
						<div class="list-group list-group-flush ">
							<a href="dashboard.php" class=" list-group-item list-group-item-action waves-effect<?php if(PAGE=='dashboard'){ echo'active';}?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
								
							<a href="work.php" class="list-group-item list-group-item-action waves-effect  <?php if(PAGE=='work'){ echo'active';}?>"><i class="fab fa-accessible-icon"></i>Work Request</a>
								
							<a href="request.php" class="list-group-item list-group-item-action waves-effect <?php if(PAGE =='request'){ echo'active';}?>"><i class="fas fa-car"></i>Requests</a>

							<a href="assets.php" class="list-group-item list-group-item-action waves-effect <?php if(PAGE=='assets'){ echo'active';}?>"><i class="fas fa-key"></i>Assets</a>

							<a href="technician.php" class="list-group-item list-group-item-action waves-effect<?php if(PAGE=='technician'){ echo'active';}?>"><i class="fas fa-key"></i>Technician</a>

							<a href="requester.php" class="list-group-item list-group-item-action waves-effect<?php if(PAGE=='requester'){ echo'active';}?>"><i class="fas fa-key"></i>Requester</a>

							<a href="sellreport.php" class="list-group-item list-group-item-action waves-effect <?php if(PAGE=='sell report'){ echo'active';}?>"><i class="fas fa-key"></i>Sell Report</a>

							<a href="workreport.php" class="list-group-item list-group-item-action waves-effect <?php if(PAGE=='work report'){ echo'active';}?>"><i class="fas fa-key"></i>Work Report</a>

							<a href="changepass.php" class="list-group-item list-group-item-action waves-effect <?php if(PAGE=='change password'){ echo'active';}?>"><i class="fas fa-key"></i>Change Password</a>


							<a href="logout.php" class=" list-group-item list-group-item-action waves-effect<?php if(PAGE=='Logout'){ echo 'active';}?>"><i class="fas fa-sign-out-alt"></i>Log Out</a>
						</div>
					</div>
					
		        </nav>