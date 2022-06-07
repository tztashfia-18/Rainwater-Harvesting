<?php 
    session_start();
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
    <link rel="stylesheet" href="css/userreview.css">
   
   <link rel="stylesheet" href="css/r.css">

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


                                    <li class="rd-nav-item"><a class="rd-nav-link" href="adminHome.php">Home</a>
</li>
                                        <li class="rd-nav-item "><a class="rd-nav-link" href="aorderList.php">Orderlist</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ataskList.php">Tasklist</a></li>
                                        <li class="rd-nav-item "><a class="rd-nav-link" href="aemployees.php">Employees</a></li>
                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="areviews">Reviews</a></li>
                                       
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>

                                      
</li>
                                        
</li>
                                        

                                        


                                    </ul>
                                </div>
                            </div>





        </header>
        

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
$AvgTyp2= (float)((4*$countExcellentType_2+3*$countGoodType_2+2*$countAverageType_2+1*$countPoorType_2)/($countAverageType_2+$countPoorType_2+$countExcellentType_2+$countGoodType_2));
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








    while($row=mysqli_fetch_assoc($result1)){ 
        
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
        
</div>
</div>
</div>
</div>
</section>



    <?php }
    
    ?>
    



    <!-- <div class="card">
        <div class="row d-flex">
           
            <div class="d-flex flex-column">
                <h3 class="mt-2 mb-0">Vikram jit Singh</h3>
                <div>
                    <p class="text-left"><span class="text-muted">4.0</span> <span class="fa fa-star star-active ml-3"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-inactive"></span></p>
                </div>
            </div>
            <div class="ml-auto">
                <p class="text-muted pt-5 pt-sm-3">10 Sept 2022</p>
            </div>
        </div>
        <div class="row text-left">
            
            <p class="content">If you really enjoy spending your vacation 'on water' or would like to try something new and exciting for the first time.</p>
        </div>
        
</div>
</div>
</div>
</div>
</section>


      
        <section>



    <div class="card">
        <div class="row d-flex">
           
            <div class="d-flex flex-column">
                <h3 class="mt-2 mb-0">Vikram jit Singh</h3>
                <div>
                    <p class="text-left"><span class="text-muted">4.0</span> <span class="fa fa-star star-active ml-3"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-inactive"></span></p>
                </div>
            </div>
            <div class="ml-auto">
                <p class="text-muted pt-5 pt-sm-3">10 Sept 2022</p>
            </div>
        </div>
        <div class="row text-left">
            
            <p class="content">If you really enjoy spending your vacation 'on water' or would like to try something new and exciting for the first time.</p>
        </div>
        
</div>
</div>
</div>
</div>
</section>



 -->







        <footer class="section footer-modern context-dark footer-modern-2">
            <div class="footer-modern-line">
                <div class="container">
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-4">
                          <!--  <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">What
                                    We Offer</span></h5>
                           <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="#">Type I : Totally Purified Water</a></li>
                                <li><a href="#">Type II : Partially Purified Water</a></li>
                                <li><a href="#">Type III : Non-Purified Water</a></li>
                                
                            </ul> -->
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <h5 class="footer-modern-title oh-desktop"><span
                                    class="d-inline-block wow slideInLeft">Information</span></h5>
                            <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                                <li><a href="aorderlist.php">Orderlist</a></li>
                                <li><a href="atasklist.php">Tasklist</a></li>
                                <li><a href="areview.php">Review</a></li>
                                <li><a href="aemployees.php">Employees</a></li>
                                <li><a href="contacts.php">Contacts</a></li>
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