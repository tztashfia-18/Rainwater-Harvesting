<?php 
  session_start(); 
  include("connection.php");


  $company_name = $_SESSION['company_name'];
    echo $company_name ;
    $query1 = "Select User_ID from user_data where Company_Name = '".$_SESSION['company_name']."' limit 1" ;
    $result1 = mysqli_query($con,$query1);
    $data1 = $result1->fetch_assoc();
    $_SESSION['user_id'] = $data1['User_ID'];
    echo $_SESSION['user_id'] ;
    


    $bill = $_SESSION['order'] * $_SESSION['bill'] ;
    $gallons_ordered = $_SESSION['order'];
    $del_date1 = date("d/m/Y");
    $del_date1 = date('d/m/Y', strtotime($del_date1. '+7 days'));
    $del_date2 = $del_date1 ;


  $query2 = "Insert Into order_data( Order_Bill , Delivery_Date , Gallons, Address ,User_ID ,Purification_ID) Values ('".$bill."' ,'".$del_date2."','".$gallons_ordered."','".$_SESSION['address']."' ,'".$_SESSION['user_id']."','".$_SESSION['type']."')";
    $result2 = mysqli_query($con,$query2);

    $status = "Pending" ;
    echo $status ;
    $query3 = "Insert Into orderlist_data( Order_Bill , Delivery_Date , Gallons, Address ,User_ID ,Purification_ID,Status) Values ('".$bill."' ,'".$del_date1."','".$gallons_ordered."','".$_SESSION['address']."' , '".$_SESSION['user_id']."','".$_SESSION['type']."','".$status."')";
    $result3 = mysqli_query($con,$query3);

    header("Location: cart.php");
?>