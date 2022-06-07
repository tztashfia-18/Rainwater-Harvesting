<?php 

session_start();
include("connection.php");

$orderNo = $_GET['Order_No'];


$query = "Select * from orderlist_data where Order_No = '$orderNo'";
$res = mysqli_query($con,$query);
while($row = $res->fetch_assoc()){
    // echo json_encode($row);
    $order_no = $row['Order_No'];
    $orderbill = $row['Order_Bill'];
    $del_date = $row['Delivery_Date'];
    $gallons = $row['Gallons'];
    $userid = $row['User_ID'];
    $purifiaction_id = $row['Purification_ID'];
    $status = $row['Status'];
    

}


$status  ="Delivered" ;

$query2 = "UPDATE `orderlist_data` SET `Order_No`='$order_no',`Order_Bill`='$orderbill',`Delivery_Date`='$del_date',`Gallons`='$gallons',`User_ID`='$userid',`Purification_ID`='$purifiaction_id',`Status`='$status' WHERE Order_No = '$order_no' ";
$res2 = mysqli_query($con,$query2);

header("location: aorderList.php");

?>