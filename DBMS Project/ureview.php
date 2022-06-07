<?php
session_start() ;

include("connection.php");
// include("functions.php");
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
    
    <link rel="stylesheet" href="css/userreview.css">
   
    <link rel="stylesheet" href="css/r.css">

    

</head>

<body>


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



                                        <li class="rd-nav-item "><a class="rd-nav-link" href="home.php">Home</a>
</li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="orderlist.php">Orderlist</a></li>

                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="ureview.php">Reviews</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ustatistics.php">Statistics</a></li>
                                       

                                        <li class="rd-nav-item "><a class="rd-nav-link" href="cart.php"><span
                                                    class="icon mdi mdi-cart"></span>
                                            </a>
</li>
                                        
</li>
                                        

                                        


                                    </ul>
                                </div>
                            </div>





        </header>
  
      

<article style="background-color: #A3D0F3; padding-left: 50px;" data-wow-delay=".15s">
<Br>
<h3>Review session</h3>

<Br><Br>

<?php


   

?>


<form method="POST" action="reviewAPI.php">
<select class="form-select" aria-label="Default select example" name ="waterType">
  <option selected><B>Select Water Type</B></option>
  <option value="Type_1" >One</option>
  <option value="Type_2" >Two</option>
  <option value="Type_3" >Three</option>
</select>

<select class="form-select" aria-label="Default select example" name ="quality">
  <option selected><B>Quality</B></option>
  <option value="Excellent">Excellent</option>
  <option value="Good">Good</option>
  <option value="Average">Average</option>
  <option value="Poor">Poor</option>
</select>

<!-- <select class="form-select" aria-label="Default select example">
  <option selected><B>Rating</B></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select> -->

<Br>
<br>
<h6><b>Comment</b></h6>
<textarea aria-label="Default select example" name = "comment"> </textarea> <br>

    <button class='button button-xs button-primary button-winona'>Set Review</button>
<Br><Br>

</form>
</article>













<?php 

//Counting Type_1 Qualities
$query2 = "Select COUNT(Quality) from review_table where Quality= 'Excellent' AND Water_Type = 'Type_1'" ;
$result2 = mysqli_query($con,$query2);
$data2 = $result2->fetch_assoc() ;
$countExcellentType_1 = $data2['COUNT(Quality)'];


$query3 = "Select COUNT(Quality) from review_table where Quality= 'Good' AND Water_Type = 'Type_1'" ;
$result3 = mysqli_query($con,$query3);
$data3 = $result3->fetch_assoc() ;
$countGoodType_1 = $data3['COUNT(Quality)'];


$query4 = "Select COUNT(Quality) from review_table where Quality= 'Average' AND Water_Type = 'Type_1'" ;
$result4 = mysqli_query($con,$query4);
$data4 = $result4->fetch_assoc() ;
$countAverageType_1 = $data4['COUNT(Quality)'];


$query5 = "Select COUNT(Quality) from review_table where Quality= 'Poor' AND Water_Type = 'Type_1'" ;
$result5 = mysqli_query($con,$query5);
$data5 = $result5->fetch_assoc() ;
$countPoorType_1 = $data5['COUNT(Quality)'];



//Counting Type_2 Qualities
$query6 = "Select COUNT(Quality) from review_table where Quality= 'Excellent' AND Water_Type = 'Type_2'" ;
$result6 = mysqli_query($con,$query6);
$data6 = $result6->fetch_assoc() ;
$countExcellentType_2 = $data6['COUNT(Quality)'];


$query7 = "Select COUNT(Quality) from review_table where Quality= 'Good' AND Water_Type = 'Type_2'" ;
$result7 = mysqli_query($con,$query7);
$data7 = $result7->fetch_assoc() ;
$countGoodType_2 = $data7['COUNT(Quality)'];


$query8 = "Select COUNT(Quality) from review_table where Quality= 'Average' AND Water_Type = 'Type_2'" ;
$result8 = mysqli_query($con,$query8);
$data8 = $result8->fetch_assoc() ;
$countAverageType_2 = $data8['COUNT(Quality)'];


$query9 = "Select COUNT(Quality) from review_table where Quality= 'Poor' AND Water_Type = 'Type_2'" ;
$result9 = mysqli_query($con,$query9);
$data9 = $result9->fetch_assoc() ;
$countPoorType_2 = $data9['COUNT(Quality)'];




//Counting Type_3 Qualities
$query10 = "Select COUNT(Quality) from review_table where Quality= 'Excellent' AND Water_Type = 'Type_3'" ;
$result10 = mysqli_query($con,$query10);
$data10 = $result10->fetch_assoc() ;
$countExcellentType_3 = $data10['COUNT(Quality)'];


$query11 = "Select COUNT(Quality) from review_table where Quality= 'Good' AND Water_Type = 'Type_3'" ;
$result11 = mysqli_query($con,$query11);
$data11 = $result11->fetch_assoc() ;
$countGoodType_3 = $data11['COUNT(Quality)'];


$query12 = "Select COUNT(Quality) from review_table where Quality= 'Average' AND Water_Type = 'Type_3'" ;
$result12 = mysqli_query($con,$query12);
$data12 = $result12->fetch_assoc() ;
$countAverageType_3 = $data12['COUNT(Quality)'];


$query13 = "Select COUNT(Quality) from review_table where Quality= 'Poor' AND Water_Type = 'Type_3'" ;
$result13 = mysqli_query($con,$query13);
$data13 = $result13->fetch_assoc() ;
$countPoorType_3 = $data13['COUNT(Quality)'];





$AvgTyp1= (4*$countExcellentType_1+3*$countGoodType_1+2*$countAverageType_1+1*$countPoorType_1)/($countAverageType_1+$countPoorType_1+$countExcellentType_1+$countGoodType_1);
$AvgTyp2= (4*$countExcellentType_2+3*$countGoodType_2+2*$countAverageType_2+1*$countPoorType_2)/($countAverageType_2+$countPoorType_2+$countExcellentType_2+$countGoodType_2);
$AvgTyp3= (4*$countExcellentType_3+3*$countGoodType_3+2*$countAverageType_3+1*$countPoorType_3)/($countAverageType_3+$countPoorType_3+$countExcellentType_3+$countGoodType_3);


$query14 = "Select COUNT(Quality) from review_table where Water_Type ='Type_1'" ;
$result14 = mysqli_query($con,$query14);
$data14 = $result14->fetch_assoc() ;
$TotalReviewsTyp1 = $data14['COUNT(Quality)'];

$totalExcellentTyp1 = (($countExcellentType_1/$TotalReviewsTyp1)*100) ;
$totalGoodTyp1 = (($countGoodType_1/$TotalReviewsTyp1)*100) ;
$totalAverageTyp1 = (($countAverageType_1/$TotalReviewsTyp1)*100) ;
$totalPoorTyp1 = (($countPoorType_1/$TotalReviewsTyp1)*100) ;



$query15 = "Select COUNT(Quality) from review_table where Water_Type ='Type_2'" ;
$result15 = mysqli_query($con,$query15);
$data15 = $result15->fetch_assoc() ;
$TotalReviewsTyp2 = $data15['COUNT(Quality)'];

$totalExcellentTyp2 = (($countExcellentType_2/$TotalReviewsTyp2)*100) ;
$totalGoodTyp2 = (($countGoodType_2/$TotalReviewsTyp2)*100) ;
$totalAverageTyp2 = (($countAverageType_2/$TotalReviewsTyp2)*100) ;
$totalPoorTyp2 = (($countPoorType_2/$TotalReviewsTyp2)*100) ;



$query16 = "Select COUNT(Quality) from review_table where Water_Type ='Type_3'" ;
$result16 = mysqli_query($con,$query16);
$data16 = $result16->fetch_assoc() ;
$TotalReviewsTyp3 = $data16['COUNT(Quality)'];

$totalExcellentTyp3 = (($countExcellentType_3/$TotalReviewsTyp3)*100) ;
$totalGoodTyp3 = (($countGoodType_3/$TotalReviewsTyp3)*100) ;
$totalAverageTyp3 = (($countAverageType_3/$TotalReviewsTyp3)*100) ;
$totalPoorTyp3 = (($countPoorType_3/$TotalReviewsTyp3)*100) ;

?>






<section>

    
        <div class="container-fluid px-1 py-5 mx-auto">
    
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
    
            <div class="card">
            <h3>TYPE 1</h3><br>
                <div class="row justify-content-left d-flex">
                    <div class="col-md-4 d-flex flex-column">
                        <div class="rating-box">
                            
                            <h3 class="pt-4"><?php echo number_format((float)$AvgTyp1,1, '.', '') ?></h3>
                            <p class="">out of 4</p>
                        
                        </div>
                        <div> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-inactive mx-1"></span> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="rating-bar0 justify-content-center">
                            <table class="text-left mx-auto">
                                <tr>
                                    <td class="rating-label">Excellent</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalExcellentTyp1 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countExcellentType_1 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Good</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalGoodTyp1 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countGoodType_1 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Average</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalAverageTyp1 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countAverageType_1 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Poor</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalPoorTyp1 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countPoorType_1 ?></td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form>
                




             
            














           
</section>



<section>
    
        <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
            <div class="card">
            <h3>TYPE 2</h3><br>
                <div class="row justify-content-left d-flex">
                    <div class="col-md-4 d-flex flex-column">
                        <div class="rating-box">
                            <h3 class="pt-4"><?php echo number_format((float)$AvgTyp2,1, '.', '') ?></h3>
                            <p class="">out of 4</p>
                        </div>
                        <div> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-inactive mx-1"></span> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="rating-bar0 justify-content-center">
                            <table class="text-left mx-auto">
                                <tr>
                                    <td class="rating-label">Excellent</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalExcellentTyp2 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countExcellentType_2 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Good</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalGoodTyp2 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px">></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countGoodType_2 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Average</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalAverageTyp2 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px">></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countAverageType_2 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Poor</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalPoorTyp2 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countPoorType_2 ?></td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form>
                




             
            














</section>

<section>
    
        <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
            <div class="card">
            <h3>TYPE 3</h3><br>
                <div class="row justify-content-left d-flex">
                    <div class="col-md-4 d-flex flex-column">
                        <div class="rating-box">
                            <h3 class="pt-4"><?php echo number_format((float)$AvgTyp3,1, '.', '') ?></h3>
                            <p class="">out of 4</p>
                        </div>
                        <div> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-inactive mx-1"></span> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="rating-bar0 justify-content-center">
                            <table class="text-left mx-auto">
                                <tr>
                                    <td class="rating-label">Excellent</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalExcellentTyp3 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countExcellentType_3 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Good</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalGoodTyp3 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countGoodType_3 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Average</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalAverageTyp3 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px"></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countAverageType_3 ?></td>
                                </tr>
                                <tr>
                                    <td class="rating-label">Poor</td>
                                    <td class="rating-bar">
                                        <div class="bar-container">
                                            <div class="" style="width: <?php echo $totalPoorTyp3 ; echo "%" ?>;
                                                height: 13px;
                                                background-color: #FBC02D;
                                                border-radius: 20px">></div>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo $countPoorType_3 ?></td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form>
                




</section>
            














            <section>
    
       

<?php

             
            


        $query1 = "Select * from review_table order by Date DESC LIMIT 10" ;
        $result1 = mysqli_query($con,$query1);






       $userid= $_SESSION['User_ID'];

            while($row=mysqli_fetch_assoc($result1)){ 
               $id= $row['User_ID'];
               $new= $row['id'];
                ?>
            <div class="card">
                <div class="row d-flex">
                   
                    <div class="d-flex flex-column">
                        <h3 class="mt-2 mb-0"><?php echo $row['Company_Name'];?></h3>
                        <div>
                            <p class="text-left"><span class="text-muted"><?php echo $row['Rating']?></span> <span class="fa fa-star star-active ml-3"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-inactive"></span></p>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <p class="text-muted pt-5 pt-sm-3"><?php echo $row['Date'];?></p>
                       
                    </div>
                    
                </div>
                
                <div class="row text-left">
                    
                    <p class="content"><?php echo $row['Comment'];?></p>
                </div>
                   <?php
                   if($userid==$id){

                   
                   ?>
                <div class="ml-auto">
               <?php echo" <a href ='reviewdlt.php?new=$new' >   <i class='fa fa-trash-o' style='font-size:36px'></i></a>" ?>
                        
                       
                    </div>
                    <?php
                   } ?>
                
        </div>
    </div>
</div>
</div>
</section>

       

            <?php }
            
            ?>

























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