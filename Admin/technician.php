<?php
define('TITLE','Technician');
define('PAGE','technician');
include('includes/header.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
	$aEmail = $_SESSION['aEmail'];

}else{
	echo "<script> location.href='login.php'</script>";
}
?>

<?php
include('includes/footer.php');
?>