<?php 
    session_start();
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
                                                    <p><?php echo $_SESSION['try'] ?></p>


                                                    </a></div>
                                            </div>
                                        </li>
                                        






                                        
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <!-- <div class="unit-left"><span class="icon mdi mdi-map-marker"></span>
                                                </div> -->
                                                <!-- <div class="unit-body"><a class="address"
                                                        href=""><?php echo "CompanyADDRESS"; ?></a></div>
                                            </div> -->
                                        </li>
                                    

                                        <li>
                                        <button type="button"  style= "background-color: white;" style="color:black;" class="btn btn-outline-info"><p style=" font-size:20px;"><a href="logout.php">Logout  </p></button>
                                        </li>
                                    
                                    




                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">


                                    <li class="rd-nav-item"><a class="rd-nav-link" href="adminHome.php">Home</a>
</li>
                                        <li class="rd-nav-item "><a class="rd-nav-link" href="aorderList.php">Orderlist</a></li>
                                        <li class="rd-nav-item "><a class="rd-nav-link" href="ataskList.php">Tasklist</a></li>
                                        <li class="rd-nav-item "><a class="rd-nav-link" href="aemployees.php">Employees</a></li>
                                        <li class="rd-nav-item "><a class="rd-nav-link" href="areviews.php">Reviews</a></li>
                                       
                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="contacts.php">Contacts</a>

                                      
</li>
                                        
</li>
                                        

                                        


                                    </ul>
                                </div>
                            </div>





        </header>
      


        <table class="table">
  <thead>
    <tr>
    <th scope="col">Name</th>
    <th scope="col">ID</th>
      <th scope="col">Comment</th>
      <th scope="col">Reply</th>
      <th scope="col">Time</th>
     
    </tr>
  </thead>
  <tbody>
    
    
    <?php
include("connection.php");
$query3 = "Select * from  emp_contact" ;
$result3 = mysqli_query($con,$query3);
while($row = $result3->fetch_assoc()){
   
$com=$row['Comment'];
$re=$row['Reply'];
$id=$row['ID'];
$time = $row['Time'];
 
$ed=$row['Emp_Id'];
$n=$row['Emp_name'];
echo "<tr><td> $n</td> <td> $ed</td> <td> $com </td><td> $re </td><td> $time </td> <td><a href ='reply.php?id=$id' >  <button>reply </button> <a></td></tr>" ;
      
}

?>
      
   
  </tbody>
</table>
        
      








        <footer class="section footer-modern context-dark footer-modern-2">
            <div class="footer-modern-line">
                <div class="container">
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-4">
                           <!-- <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">What
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