<?php
include('includes/header.php');
?>


<?php
@session_start();
@session_destroy();
header("location:../index.php");
?>

<?php
include('includes/footer.php');
?>