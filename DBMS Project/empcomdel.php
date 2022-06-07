<?php
include("connection.php");
$id=$_GET['id'];


$sql="DELETE FROM `emp_contact` WHERE ID=$id";
$result=mysqli_query($con,$sql);
header("location: empContact.php");


?>