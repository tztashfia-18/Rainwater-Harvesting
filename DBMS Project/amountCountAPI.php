<?php
session_start();
include("connection.php");

 $userid = $_SESSION['User_ID'];
 $query1 = "select * from order_data Where User_ID = '$userid'";
 $result1 = mysqli_query($con,$query1);

$amount=0;
 while($row=mysqli_fetch_assoc($result1)){

 	$amount+=$row['Order_Bill'] ;
 }

 $_SESSION['amount'] = $amount ;
 header("location: payment.php");

?>