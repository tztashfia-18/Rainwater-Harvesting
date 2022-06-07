<?php
session_start();
$amount=0;
include("connection.php");

$userid = $_SESSION['User_ID'];
echo $userid;
$query1 = "select * from order_data Where User_ID = '$userid'";
$result1 = mysqli_query($con,$query1);

while($row=mysqli_fetch_assoc($result1)){

	$amount+=$row['Order_Bill'] ;
}

$_POST['amount'] = $amount ;

$_SESSION['amount'] = $_POST['amount'];

echo $_SESSION['user_email'] ;
$email = $_SESSION['user_email'] ;
$_POST['email'] = $_SESSION['user_email'] ;

//echo $bill;
header("location: payment.php?email=$email") ;

?>