<?php 
session_start();
include("connection.php");

$uniqueid = $_GET['Unique_ID'];
$A = $_GET['A'];
// echo $A ;
// echo $uniqueid ;

$query = "Select * from tasklist where Unique_ID = '$uniqueid'";
$res = mysqli_query($con,$query);
while($row = $res->fetch_assoc()){
    // echo json_encode($row);
    $taskid = $row['Task_ID'];
    $uniqueid = $row['Unique_ID'];
    $employee_id = $row['Employee_ID'];
    $title = $row['Task_Title'];
    $details = $row['Task_Details'];
    $city = $row['Task_City'];
    $road = $row['Task_Road'];
    $bill = $row['Task_Bill'];
    

}


if($A == 1){

$status  ="Done" ;

$query2 = "UPDATE `tasklist` SET `Unique_ID`='$uniqueid',`Task_ID`='$taskid',`Employee_ID`='$employee_id',`Task_Title`='$title',`Task_Details`='$details',`Task_City`='$city',`Task_Road`='$road',`Task_Bill`='$bill',`Status`='$status' WHERE Unique_ID = '$uniqueid' ";
$res2 = mysqli_query($con,$query2);


if($res2){
     header("location: atasklist.php") ;
}
}
if($A == 2){
$status2  ="Working" ;

$query3 = "UPDATE `tasklist` SET `Unique_ID`='$uniqueid',`Task_ID`='$taskid',`Employee_ID`='$employee_id',`Task_Title`='$title',`Task_Details`='$details',`Task_City`='$city',`Task_Road`='$road',`Task_Bill`='$bill',`Status`='$status2' WHERE Unique_ID = '$uniqueid' ";
$res3 = mysqli_query($con,$query3);


if($res3){
     header("location: atasklist.php") ;
}
}
?>



