<?php
define('TITLE','Assets');
define('PAGE','assets');
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
include('includes/footer.php')



?>