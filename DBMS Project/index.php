<?php
session_start();



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
	<link rel="stylesheet" href="css/ustatistics.css">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript">
		<script type="text/javascript">
function scrollto(div)
{
 $('html,body').animate(
 {
  scrollTop: $("#"+div).offset().top
 },'slow');
}
</script>

</head>

<body>
<div class="preloader">
        <div class="wrapper-triangle">

        </div>
    </div>
    <div class="page">

        <!-- Page Header-->
        
        
        <header>
        <img src="Images/LogoHome.png" alt="" ></img>
</header>

<div class="speak one active"><a href="#"><span>Home</span></a></div>
<div  class="speak two"><a href="#about"> <span>About Us</span> </a></div>

<div class="dropdown" >
  <button class="dropbtn"><b>LOG IN</b></button>
  <div class="dropdown-content">
    <a href="login.php">USER LOGIN</a>
    <a href="empLogin.php">EMPLYOEE LOGIN</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"><b>SIGN UP</b></button>
  <div class="dropdown-content">
    <a href="signup.php">USER SIGN UP</a>
  
   
  </div>
</div>

      <br>  
		
        <!-- Swiper-->
        <br><br><br><br><br>
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
</div>
        <!-- What We Offer-->
     

        <!-- Section CTA-->
        
       
 
        
    

        <!-- What We Offer-->
        
        <section class="section section-lg bg-default">
            <div class="container">
                
               
                <div class="row row-lg row-30">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Product-->
                        

                       

</div>









        </section>
<div id="about">

     
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
     
<Br><Br><br><br>
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
	<script src="js/custom.js"></script>
    <script src="js/index.js"></script>
    <!-- coded by Himic-->

    
</body>

</html>