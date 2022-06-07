
<?php
session_start();
include("connection.php");


if(!isset($_SESSION['Employee_ID'])){
    header("location: empLogin.php");
    exit;
}


$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

if($result->status=='success'){
	
	if(isset($result->lat) && isset($result->lon)){
		
	}

	
}

    
    

    $ip_val = curl_init('http://ipwhois.app/json/'.$result->query);
    curl_setopt($ip_val, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ip_val);
    curl_close($ip_val);

    
    $ip_result = json_decode($json, true);
    // echo "<pre>";
    


     $_SESSION['city'] =  $ip_result['city'] ;
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



                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="emphome.php">Home</a>
</li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="empTasklist.php">Tasklist</a></li>

                                
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="empContact.php">Contact Us</a>

                                        
                                        
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
        <!-- What We Offer-->
     

        <!-- Section CTA-->
        
       
 <!--
        
        <section class="primary-overlay section parallax-container" data-parallax-img="Images/JobVacancy.png">
            <div class="parallax-content section-xxl context-dark text-md-left">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-sm-9 col-md-7 col-lg-5">
                            <div class="cta-modern">
                                <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span
                                        class="d-inline-block wow fadeInLeft">-20% off using LSA bank card</span></h3>
                                <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span
                                        class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span><span
                                        class="d-inline-block wow slideInUp">Taste some of the best Food!</span></p><a
                                    class="button button-lg button-secondary button-winona wow fadeInRight" href=""
                                    data-wow-delay=".2s">Oder Food</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- What We Offer-->

        <section class="section section-lg bg-default">
            <div class="container">
                <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Task To Do</span></h3>
                <div class="row row-lg row-30">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Product-->

                        <?php
        $city = $_SESSION['city'] ;
                        
        $query = "Select * from employee_task Where Task_City Like '$city'" ;
        $result1 = mysqli_query($con,$query);
      
       while($row=mysqli_fetch_array($result1)){
        $id=$row['Task_ID'];
        
           ?>

                        <article class="product wow fadeInLeft" data-wow-delay=".15s">


                           
                            

                            <h3 class="product-title"> <?php echo $row['Task_Title']; ?></h3>
                            <h6 class="product-title"><?php echo $row['Task_Details']; ?></h6>
                            <h6 class="product-title"><?php echo $row['Task_City']; ?></h6>
                            <h6 class="product-title"><?php echo $row['Task_Road']; ?></h6>
                            <div class="product-price-wrap">
                                <div class="product-price"><?php echo $row['Task_Bill']; ?>Tk</div>
                            </div>


                            
                            <?php echo" <a class='button button-xs button-primary button-winona' href='taskAPI.php?Task_ID=$id'>Start</a>"?>

                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">





                        <?php }

    ?>








        </section>


       

        
                        <!-- Product-->
                       

                       <!-- <article style="background-color: #A3D0F3;" class="product wow fadeInLeft" data-wow-delay=".15s">


                            <div class="product-figure"><img src="" alt="" width="161"
                                    height="162" />
                            </div>
                            <div class="product-rating"><span class="mdi mdi-star"></span><span
                                    class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
                                    class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                            </div>

                            <h3 class="product-title">Task 2</h3>
                            <h6 class="product-title"><B>Not Assigned Yet</B></h6>
                            <div class="product-price-wrap">
                                <div style="color: blue;" class="product-price">Null</div>
                            </div> 
                            <h6 class="product-title">Null</h6><br>
                            
                            
                           

                                 <a class='button button-xs button-primary button-winona' href=''>Start</a>


                        </article>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">





                       








        

        
                        <!-- Product-->

                        
                        

                       


<!-- <article style="background-color: #A3D0F3;" class="product wow fadeInLeft" data-wow-delay=".15s">


                            <div class="product-figure"><img src="" alt="" width="161"
                                    height="162" />
                            </div>
                            <div class="product-rating"><span class="mdi mdi-star"></span><span
                                    class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span
                                    class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                            </div>

                            <h3 class="product-title">Task 3</h3>
                            <h6 class="product-title"><B>Not Assigned</B></h6>
                            <div class="product-price-wrap">
                                <div style="color: blue;" class="product-price">Null</div>
                            </div> 
                            <h6 class="product-title">Null</h6><br>
                            
                            
                            

                                 <a class='button button-xs button-primary button-winona' href=''>Start</a>


                        </article>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-xl-3">
                    <article style="background-color: white;" class="product wow fadeInLeft" data-wow-delay=".15s">
<h6 style="color: red; text-align: center;">Advertisement!</h6><Br>

<div class="product-figure"><a href=""><img src="Images/JobVacancy.png" alt="" width="500"
        height="1500" /></a>
</div>
<div class="product-figure"><br><a href=""><img src="Images/WaterDay.png" alt="" width="500"
        height="900" /></a>
</div>





</article> -->

</div>









        </section>




       

      


        <!-- Page Footer-->
        <footer class="section footer-modern context-dark footer-modern-2">
            <div class="footer-modern-line">
                <div class="container">
                    <div class="row row-50">
                     <!--<div class="col-md-6 col-lg-4">
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