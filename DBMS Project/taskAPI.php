<?php 

session_start(); 
  include("connection.php");

  $id = $_GET['Task_ID'] ;
  echo $id ; 

  $query1 = "Select * from employee_task where Task_ID = '$id'" ;
  $res = mysqli_query($con,$query1) ;

    $title = "" ; $details = "" ; $city = "" ; $road = "" ; $bill  ;  $empid = $_SESSION['Employee_ID'] ; $status = 'Working' ;

  while($row=mysqli_fetch_array($res)){
      $title = $row['Task_Title'];
      $details = $row['Task_Details'];
      $city = $row['Task_City'];
      $road = $row['Task_Road'];
      $bill = $row['Task_Bill'];
  }


  $query2 = "Insert into tasklist (Task_ID,Employee_ID,Task_Title , Task_Details , Task_City , Task_Road , Task_Bill , Status) Values('$id','$empid' , '$title','$details' ,'$city','$road','$bill' , '$status')" ;
  $result1 = mysqli_query($con,$query2);

  if($result1){
      header("location: empTasklist.php") ;
  }


?>