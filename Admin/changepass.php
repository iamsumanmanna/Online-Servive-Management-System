<?php
define('TITLE','Change Password');
define('PAGE','chnage password');
include('includes/header.php');
include('../db_conn.php');
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