<?php
session_start();

if(!isset($_SESSION['try'])){
    header("location: adminLogin.php");
    exit;
}


?>



<?php 



include("connection.php");


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
    
   
    <link rel="stylesheet" href="css/ustatistics.css">
    

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
                                                
                                                
                                                echo$_SESSION['try'];                            
                                                ?></p>


                                                    </a></div>
                                            </div>
                                        </li>
                        
                                    

                                        <li>
                                        <button type="button"  style= "background-color: white;" style="color:black;" class="btn btn-outline-info"><a href="adminLogout.php"><p style=" font-size:20px;">Logout  </p></a></button>
                                        </li>
                                    




                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">



                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="adminHome.php">Home</a>
</li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="aorderList.php">Orderlist</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ataskList.php">Tasklist</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="aemployees.php">Employees</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="areviews.php">Reviews</a></li>
                                       
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>

                                      
</li>
                                        
</li>


                                        


                                    </ul>
                                </div>
                            </div>





        </header>
        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true"
        data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
            <div class="swiper-slide context-dark" data-slide-bg="Images/1.jpeg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                                <h2 class="oh swiper-title"><span  style="color: blue;" class="d-inline-block"
                                        data-caption-animate="slideInUp" data-caption-delay="0">We are always determined to our service.</span>
                                </h2>
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="Images/3.jpeg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                                <h2 class="oh swiper-title"><span style="color: blue;" class="d-inline-block"
                                        data-caption-animate="slideInDown" data-caption-delay="0">We are always determined to our service.</span></h2>
                            
                                <div class="button-wrap oh" style="color: blue; font-size: 30px;" >
                                <!--<a
                                        class="button button-lg button-primary button-winona button-shadow-2"
                                        href="#" data-caption-animate="slideInUp" data-caption-delay="0">About Us</a>
-->
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination" data-bullet-custom="true"></div>
            <!-- Swiper Navigation-->
            <div class="swiper-button-prev">
                <div class="preview">
                    <div class="preview__img"></div>
                </div>
                <div class="swiper-button-arrow"></div>
            </div>
            <div class="swiper-button-next">
                <div class="swiper-button-arrow"></div>
                <div class="preview">
                    <div class="preview__img"></div>
                </div>
            </div>
        </section>
       




     




<Br><Br>
<h3 style="text-align:center;">Percentage Of Water Collection</h3>   
<Br><Br>

<?php 

$type1space = 50000 ;
$type2space = 100000 ;
$type3space = 100000 ;

$query1 = "Select SUM(Available_Gallons) from purification where Type = 'Type_1'";
$result1 = mysqli_query($con,$query1);
$data1 = $result1->fetch_assoc();
$type1 = $data1['SUM(Available_Gallons)'] ;

$query2 = "Select SUM(Available_Gallons) from purification where Type = 'Type_2'";
$result2 = mysqli_query($con,$query2);
$data2 = $result2->fetch_assoc();
$type2 = $data2['SUM(Available_Gallons)'] ;

$query3 = "Select SUM(Available_Gallons) from purification where Type = 'Type_3'";
$result3 = mysqli_query($con,$query3);
$data3 = $result3->fetch_assoc();
$type3 = $data3['SUM(Available_Gallons)'] ;

$type1Per = ($type1 / $type1space) * 100 ; 
$type2Per = ($type2 / $type2space) * 100 ;
$type3Per = ($type3 / $type3space) * 100 ;


?>
<section style="text-align:center;">
<div class="pie no-round" style="--p:<?php echo $type1Per ?>;--c:purple;--b:15px"><?php echo $type1Per ?>%</div>

<div class="pie no-round" style="--p:<?php echo $type2Per ?>;--c:blue;--b:15px"> <?php echo $type2Per ?>%</div>

<div class="pie no-round" style="--p:<?php echo $type3Per ?>;--c:green;--b:15px"> <?php echo $type3Per ?>%</div>


<h6> <span style="padding-right: 30px;">Type I Water </span>  
<span style="padding-right: 30px;">Type II Water </span>
<span style="padding-right: 30px;">Type III Water </span></h6>
<Br><Br><br>

</section>

        
      



      


        <!-- Page Footer-->
        <footer class="section footer-modern context-dark footer-modern-2">
            <div class="footer-modern-line">
                <div class="container">
                    <div class="row row-50">
                       <!-- <div class="col-md-6 col-lg-4">
                            <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">What
                                    We Offer</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="#">Type I : Totally Purified Water</a></li>
                                <li><a href="#">Type II : Partially Purified Water</a></li>
                                <li><a href="#">Type III : Non-Purified Water</a></li>
                                
                            </ul>
                        </div>
--><div class="col-md-6 col-lg-4">
<h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Information</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                        
                                <li><a href="aorderlist.php">Orderlist</a></li>
                                <li><a href="atasklist.php">Tasklist</a></li>
                                <li><a href="areviews.php">Review</a></li>
                                <li><a href="employees.php">Employees</a></li>
                               
                                <li><a href="contacts.php">Contact Us</a></li>
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