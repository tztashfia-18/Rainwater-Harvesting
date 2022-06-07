<?php

session_start();
include("connection.php") ;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //something was posted
    $waterType = $_POST['waterType'];
    $quality = $_POST['quality'];
    $comment = $_POST['comment'];
    
    if($_POST['quality'] == 'Excellent'){
        $query = "insert into review_table (Water_Type,Quality,Rating,Comment,User_ID,Company_Name) values ('".$waterType."','".$quality."',4,'".$comment."',".$_SESSION['User_ID'].",'".$_SESSION['company_name']."')";
     
     $result = mysqli_query($con,$query);

    header("location: ureview.php");
    }
    else if($_POST['quality'] == 'Good'){
        $query = "insert into review_table (Water_Type,Quality,Rating,Comment,User_ID,Company_Name) values ('".$waterType."','".$quality."',3,'".$comment."',".$_SESSION['User_ID'].",'".$_SESSION['company_name']."')";
     
     $result = mysqli_query($con,$query);

    header("location: ureview.php");
    }
    else if($_POST['quality'] == 'Average'){
        $query = "insert into review_table (Water_Type,Quality,Rating,Comment,User_ID,Company_Name) values ('".$waterType."','".$quality."',2,'".$comment."',".$_SESSION['User_ID'].",'".$_SESSION['company_name']."')";
     
     $result = mysqli_query($con,$query);

    header("location: ureview.php");
    }
    else if($_POST['quality'] == 'Poor'){
        $query = "insert into review_table (Water_Type,Quality,Rating,Comment,User_ID,Company_Name) values ('".$waterType."','".$quality."',1,'".$comment."',".$_SESSION['User_ID'].",'".$_SESSION['company_name']."')";
     
     $result = mysqli_query($con,$query);

    header("location: ureview.php");
    }



    
 }



?>