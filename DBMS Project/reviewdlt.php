<?php
include("connection.php");
$new=$_GET['new'];


$sql="DELETE FROM `review_table` WHERE id=$new";
$result=mysqli_query($con,$sql);
header("location: ureview.php");


?>