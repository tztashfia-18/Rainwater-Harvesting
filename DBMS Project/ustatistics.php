<?php 
session_start();
include("connection.php") ;

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
                                        <button type="button"  style= "background-color: white;" style="color:black;" class="btn btn-outline-info"><a href='logout.php'><p style=" font-size:20px;">Logout  </p></a></button>
                                        </li>
                                    




                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">



                                        <li class="rd-nav-item "><a class="rd-nav-link" href="home.php">Home</a>
</li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="orderlist.php">Orderlist</a></li>

                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ureview.php">Reviews</a></li>
                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="ustatistics.php">Statistics</a></li>
                                       

                                        <li class="rd-nav-item "><a class="rd-nav-link" href="cart.php"><span
                                                    class="icon mdi mdi-cart"></span>
                                            </a>
</li>
                                        
</li>
                                        

                                        


                                    </ul>
                                </div>
                            </div>





        </header>
        <Br><Br>
<h3>Percentage Of Water Collection</h3>   
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

<div class="pie no-round" style="--p:<?php echo $type1Per ?>;--c:purple;--b:15px"><?php echo $type1Per ?>%</div>

<div class="pie no-round" style="--p:<?php echo $type2Per ?>;--c:blue;--b:15px"> <?php echo $type2Per ?>%</div>

<div class="pie no-round" style="--p:<?php echo $type3Per ?>;--c:green;--b:15px"> <?php echo $type3Per ?>%</div>


<h6> <span style="padding-right: 30px;">Type I Water </span>  
<span style="padding-right: 30px;">Type II Water </span>
<span style="padding-right: 30px;">Type III Water </span></h6>
<Br><Br><br>



        
      




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
                                <li><a href="ureview.php">Review</a></li>
                                <li><a href="ustatistics.php">Statistics</a></li>
                               
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