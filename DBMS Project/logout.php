<?php 

session_start();

// if(isset($_SESSION['User_ID'])){
//     unset($_SESSION['User_ID']);
// }


//session_destroy();
unset($_SESSION['User_ID']);
header("Location: login.php");


?>