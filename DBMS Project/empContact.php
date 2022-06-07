
<?php
session_start() ;
include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){


 
  $comment=$_POST["comment"];
  $email=$_SESSION['email'];
  $userid=$_SESSION['Employee_ID'];
  $name =$_SESSION['employee_name'] ;
  $s="";
 

  
  $query = "insert into emp_contact (Emp_Id	,emp_email,Comment,Reply,Emp_name) values ('$userid','$email','$comment','$s','$name')";
  mysqli_query($con,$query) ;
  header("Location: emphome.php");


}

?>












<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/food1lofo2.png" type="image/x-icon">
    <!-- Stylesheets-->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/styless.css">
    

</head>

<body>
<div class="preloader">
        <div class="wrapper-triangle">

        </div>
    </div>
    <div class="page">

        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner-outer">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div  class="rd-navbar-brand"><a class="brand"style="width=1px; height=3px" href="home.php"><img
                                            class="brand-logo-dark" src="Images/LogoHome.png" alt="" 
                                            /></a></div>
                            </div>
                            <div class="rd-navbar-right rd-navbar-nav-wrap">
                                <div class="rd-navbar-aside">
                                    <ul class="rd-navbar-contacts-2">

                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-account"></span></div>
                                                <div class="unit-body"><a class="account" href="">
                                                <p><?php 
                                                
                                                
        echo$_SESSION['employee_name'];                                        
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                 ?></p>



                                                    </a></div>
                                            </div>
                                        </li>
                                        






                                        
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span>
                                                </div>
                                                <div class="unit-body"><a class="address"
                                                        href="https://www.google.com/maps/place/Gulshan,+Dhaka/@23.7897077,90.3929248,14z/data=!3m1!4b1!4m5!3m4!1s0x3755c7a0f70deb73:0x30c36498f90fe23!8m2!3d23.7924961!4d90.4078058"><?php echo $_SESSION['adrs'] ;?></a></div>
                                            </div>
                                        </li>
                                    

                                        <li>
                                        <button type="button"  style= "background-color: white;" style="color:black;" class="btn btn-outline-info"><a href="empLogout.php"><p style=" font-size:20px;">Logout  </p></a></button>
                                        </li>
                                    




                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">



                                        <li class="rd-nav-item "><a class="rd-nav-link" href="emphome.php">Home</a>
</li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="atasklist.php">Tasklist</a></li>

                                       
                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="empcontac.php">Contact Us</a>

                                        
                                        
</li>
                                        

                                        


                                    </ul>
                                </div>
                            </div>





        </header>


        <article style="background-color: #A3D0F3; padding-left: 50px;" data-wow-delay=".15s">
<Br>
<h4>Messaging Option</h4>

<Br><Br>




<form method="POST" action="">








<h5><b>Comment</b></h5><br>
<input style="height: 150px; width: 300px"aria-label="Default select example" name = "comment" required> </input> <br>

 <button class='button button-xs button-primary button-winona'><a href="emphome.php">Sent</a></button>
<Br><Br>

</form>
</article>




        <table class="table">
  <thead>
    <tr>
    
    <th scope="col">Time</th>
      <th scope="col">Comment</th>
      <th scope="col">Reply</th>
      <th scope="col">DELETE</th>
     
    </tr>
  </thead>
  <tbody>
    

    
    <?php
$empid=$_SESSION['Employee_ID'];
$query3 = "Select * from  emp_contact  Where Emp_Id = '$empid'" ;
$result3 = mysqli_query($con,$query3);
while($row = $result3->fetch_assoc()){
$com=$row['Comment'];
$id=$row['ID'];
$time=$row['Time'];
$re=$row['Reply'];



echo "<tr><td>$time</td><td> $com </td><td> $re </td><td><a href ='empcomdel.php?id=$id'><i class='fa fa-trash-o' style='font-size:36px'></i></a></td></tr>" ; 
      
}

?>
      
   
  </tbody>
</table>
        
      



        
      




        <footer class="section footer-modern context-dark footer-modern-2">
            <div class="footer-modern-line">
                <div class="container">
                    <div class="row row-50">
                     <!--   <div class="col-md-6 col-lg-4">
                            <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">What
                                    We Offer</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="#">Type I : Totally Purified Water</a></li>
                                <li><a href="#">Type II : Partially Purified Water</a></li>
                                <li><a href="#">Type III : Non-Purified Water</a></li>
                                
                            </ul>
                        </div>
-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <h5 class="footer-modern-title oh-desktop"><span
                                    class="d-inline-block wow slideInLeft">Information</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="tasklist.php">Tasklist</a></li>
                               
                                <li><a href="empContact.php">Contact Us</a></li>
                            </ul>
                        </div>


                        </form>
                    </div>
                </div>
            </div>
    </div>


  


        <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                <div class="group-xmd group-sm-justify">
                  <div class="footer-modern-contacts wow slideInUp">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:#">012345678</a></div>
                    </div>
                  </div>
                  <div class="footer-modern-contacts wow slideInDown">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:rainwh3@gmail.com">rainwh3@gmail.com</a></div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>


        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
</body>

</html>