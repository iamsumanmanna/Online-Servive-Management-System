<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo TITLE ?></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet"  href="../css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Include jQuery -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<!-- Top Navbar--->
		<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col md-2 mr-0" href="RequesterProfile.php">WebBly</a></nav>
	<!--Side bar--->
		<div class="container-fluid" style="margin-top: 40px;">
			<div class="row">
				<nav class="col-sm-2 bg-dark sidebar py-5 d-print-none">
					<div class="sidebar-sticky">
						<ul class="nav flex-column">
							<li class="nav-item"><a href="RequesterProfile.php" class="nav-link <?php if(PAGE=='RequesterProfile'){ echo'active';}?>"><i class="fas fa-user"></i>Profile</a></li>
								
							<li class="nav-item"><a href="SubmitRequester.php" class="nav-link <?php if(PAGE=='SubmitRequester'){ echo'active';}?>"><i class="fab fa-accessible-icon"></i>Submit Resquest</a></li>
								
							<li class="nav-item"><a href="CheckStatus.php" class="nav-link <?php if(PAGE =='CheckStatus'){ echo'active';}?>"><i class="fas fa-car"></i>Service Status</a></li>

							<li class="nav-item"><a href="RequesterPass.php" class="nav-link <?php if(PAGE=='RequesterPass'){ echo'active';}?>"><i class="fas fa-key"></i>Change Password</a></li>

							<li class="nav-item"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
						</ul>
					</div>
		        </nav><!---End side bar 1st Coloum--->