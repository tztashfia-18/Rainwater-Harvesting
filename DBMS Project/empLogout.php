<?php 

session_start();


unset($_SESSION['Employee_ID']);
header("Location: empLogin.php");


?>