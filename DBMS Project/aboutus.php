<?php
session_start();

if(!isset($_SESSION['User_ID'])){
    header("location: index.php");
    exit;
}


?>

<?php 



include("connection.php");


$query1 = "Select *,SUM(Available_Gallons) from purification where Type = 'Type_1'";
$result1 = mysqli_query($con,$query1);
$data1 = $result1->fetch_assoc() ;
$_SESSION['type1_gallon'] = $data1['SUM(Available_Gallons)'] ;

$query2 = "Select *,SUM(Available_Gallons) from purification where Type = 'Type_2'";
$result2 = mysqli_query($con,$query2);
$data2 = $result2->fetch_assoc() ;
$_SESSION['type2_gallon'] = $data2['SUM(Available_Gallons)'] ;

$query3 = "Select *,SUM(Available_Gallons) from purification where Type = 'Type_3'";
$result3 = mysqli_query($con,$query3);
$data3 = $result3->fetch_assoc() ;
$_SESSION['type3_gallon'] = $data3['SUM(Available_Gallons)'] ;

$minOrder1 = 1000;
$minOrder2 = 650 ;
$minOrder3 = 500 ;

$bill1 = 500 ;
$bill2 = 350 ;
$bill3 = 200 ;



// $order1 = 0;
// $order2 = 0;
// $order3 = 0;


if(isset($_POST['order1'])){
    $order1 = $_POST['order1'];
    $_SESSION['type'] = $data1["Purification_ID"];
    if($order1 >= $minOrder1 && $order1 <= $_SESSION['type1_gallon']){
        $_SESSION['order'] = $order1 ;
        $_SESSION['bill'] = $bill1 ;
        header("location: orderAPI.php");
    }else{
        echo "Place Valid Order!" ;
    }
} else if(isset($_POST['order2'])){
    $order2 = $_POST['order2'];
    $_SESSION['type'] = $data2["Purification_ID"];
    if($order2 >= $minOrder2 && $order2 <= $_SESSION['type2_gallon']){
        $_SESSION['order']= $order2 ;
        $_SESSION['bill'] = $bill2 ;
        header("location: orderAPI.php");
    }else{
        echo "Place Valid Order!";
    }
} else if(isset($_POST['order3'])){
    $order3 = $_POST['order3'];
    $_SESSION['type'] = $data3["Purification_ID"];
    if($order3 >= $minOrder3 && $order3 <= $_SESSION['type3_gallon']){
        $_SESSION['order']= $order3 ;
        $_SESSION['bill'] = $bill3 ;
        header("location: orderAPI.php");
    }else{
        echo "Place Valid Order!";
    }
}



// if($_SERVER['REQUEST_METHOD']=== "POST"){
//     $order1 = $_POST['order1'];
  
//     if($order1 >= $minOrder1){
//         echo "Work";
//         header("location: cart.php");
        
//      }else{
//          echo "Out of Gallons" ;
//      }

//     // header("location: cart.php");
// }

// if($_SERVER['REQUEST_METHOD']=== "POST"){
//     $order2 = $_POST['order2'];
  
//     if($order2 >= $minOrder2){
//         echo "Work";
//         header("location: cart.php");
        
//      }else{
//          echo "Out of Gallons" ;
//      }

//     // header("location: cart.php");
// }
// if($_SERVER['REQUEST_METHOD']=== "POST"){
//     $order3 = $_POST['order3'];
  
//     if($order3 >= $minOrder3){
//         echo "Work";
//         header("location: cart.php");
        
//      }else{
//          echo "Out of Gallons" ;
//      }

//     // header("location: cart.php");
// }

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

      <!-- Top Banner-->
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
                                                    <p><?php echo $_SESSION['company_name']; ?></p>


                                                    </a></div>
                                            </div>
                                        </li>
                                        






                                        
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span>
                                                </div>
                                                <div class="unit-body"><a class="address"
                                                        href="https://www.google.com/maps/place/Gulshan,+Dhaka/@23.7897077,90.3929248,14z/data=!3m1!4b1!4m5!3m4!1s0x3755c7a0f70deb73:0x30c36498f90fe23!8m2!3d23.7924961!4d90.4078058"><?php echo $_SESSION['address'] ;?></a></div>
                                            </div>
                                        </li>
                                    

                                        <li>
                                        <button type="button"  style= "background-color: white;" style="color:black;" class="btn btn-outline-info"><p style=" font-size:20px;"><a href="logout.php">Logout  </p></button>
                                        </li>
                                    




                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">



                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="">Home</a>
</li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="orderlist.php">Orderlist</a></li>

                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ureview.php">Reviews</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ustatistics.php">Statistics</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="contactUs.php">Contact Us</a>

                                        <li class="rd-nav-item "><a class="rd-nav-link" href="cart.php"><span
                                                    class="icon mdi mdi-cart"></span>
                                            </a></li>
</li>
                                        
</li>
                                        

                                        


                                    </ul>
                                </div>
                            </div>





        </header>
      <!-- Breadcrumbs -->
      
      <!-- Contacts-->
      <br><br>
      <h3 style="color: blue; text-align: center;"> About Us </h3>
      <section class="section section-lg bg-default text-md-left">
        <div class="container">
          <div class="row row-60 justify-content-center">
            <div class="col-lg-8">
             <h6 style="text-align: left;">We work on collecting and using rainwater to conserve resources. Building on years of experience, Rainwater Harvest offers sustainable solutions for quality water. 

</h6><br><br>
             <h6 style="text-align: left;">We provide advanced machines for the whole process of the purification system. As an early adopter of rainwater harvesting technology, we offer a full array of water catchment and purification advancements backed with the experience. 
 
                 
</h6><br><br>

             <h6 style="text-align: left;">We deliver 3 types of water supply. From pure drinking water to direct rainwater, you can have it all right here on this website! 
 
                 
</h6>


 
            </div>
            
            <div class="col-lg-4">
              <div class="aside-contacts">
                <div class="row row-30">
                    <h6 style="color: Red; text-align: center;">Advertisement!</h6>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                  <img src="Images/JobVacancy.png" alt="Girl in a jacket" width="" height="">
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                  <img src="Images/WaterDay.png" alt="Girl in a jacket" width="" height="">
                  </div>
                  
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      <!-- Page Footer-->
      <footer class="section footer-modern context-dark footer-modern-2">
      <div class="footer-modern-line">
                <div class="container">
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-4">
                            <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">What
                                    We Offer</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="#">Type I : Totally Purified Water</a></li>
                                <li><a href="#">Type II : Partially Purified Water</a></li>
                                <li><a href="#">Type III : Non-Purified Water</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <h5 class="footer-modern-title oh-desktop"><span
                                    class="d-inline-block wow slideInLeft">Information</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="orderlist.php">Orderlist</a></li>
                                <li><a href="#">Review</a></li>
                                <li><a href="#">Statistics</a></li>
                                <li><a href="contactUs.php">Contact Us</a></li>
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
  </body>
</html>

