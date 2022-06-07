<?php 

session_start();

// if(isset($_SESSION['User_ID'])){
//     unset($_SESSION['User_ID']);
// }


//session_destroy();
unset($_SESSION['try']);
header("Location: adminLogin.php");


?>