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
                                                    <p><?php echo $_SESSION['company_name'] ?></p>


                                                    </a></div>
                                            </div>
                                        </li>
                                        






                                        
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span>
                                                </div>
                                                <div class="unit-body"><a class="address"
                                                        href="https://www.google.com/maps/place/Gulshan,+Dhaka/@23.7897077,90.3929248,14z/data=!3m1!4b1!4m5!3m4!1s0x3755c7a0f70deb73:0x30c36498f90fe23!8m2!3d23.7924961!4d90.4078058"><?php echo $_SESSION['address']; ?></a></div>
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
                                        <li class="rd-nav-item active"><a class="rd-nav-link" href="orderlist.php">Orderlist</a></li>

                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ureview.php">Reviews</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="ustatistics.php">Statistics</a></li>
                                        

                                        <li class="rd-nav-item  "><a class="rd-nav-link" href="cart.php"><span
                                                    class="icon mdi mdi-cart"></span>
                                            </a>
</li>
                                        
</li>
                                        

                                        


                                    </ul>
                                </div>
                            </div>





        </header>
        <table class="table table-success table-striped table-hover">

        <thead>
    <tr >
      <!-- <th scope="col">Select </th> -->
      <th scope="col">Order_No</th>
      <th scope="col">Order_Bill</th>
      <th scope="col">Delivery_Date</th>
      <th scope="col">Gallons</th>
      <th scope="col">Type</th>
      <th scope="col">Status</th>
      <!-- <th scope="col">Purification_ID</th> -->
    </tr>
  </thead>
  <tbody>

    <?php 


    // if(isset($_GET['id'])){
    //   $id = $_GET['id'] ;
    //   $delete = mysqli_query($con,"DELETE FROM order_data Where Order_No = $id");
    // }

    error_reporting(E_ERROR | E_PARSE);
    $company_name = $_SESSION['company_name'];
   // echo $company_name ;
    $query1 = "Select User_ID from user_data where Company_Name = '".$_SESSION['company_name']."' limit 1" ;
    $result1 = mysqli_query($con,$query1);
    $data1 = $result1->fetch_assoc();
    $_SESSION['user_id'] = $data1['User_ID'];
    //echo $_SESSION['user_id'] ;
    



    $bill = $_SESSION['order'] * $_SESSION['bill'] ;
    $gallons_ordered = $_SESSION['order'];
    $del_date = date('d/m/Y', strtotime('+7 days'));
    



    // $query2 = "Insert Into order_data( Order_Bill , Delivery_Date , Gallons ,User_ID ,Purification_ID) Values ('".$bill."' ,'".$del_date."','".$gallons_ordered."', '".$_SESSION['user_id']."','".$_SESSION['type']."')";
    // $result2 = mysqli_query($con,$query2);
    
    $userid = $_SESSION['user_id'] ;
    $query3 = "Select * from orderlist_data JOIN purification ON orderlist_data.Purification_ID = purification.Purification_ID Where User_ID = $userid ORDER BY orderlist_data.Order_No " ;
    $result3 = mysqli_query($con,$query3);
    // $data3 = $result3->fetch_assoc();


    while($row = $result3->fetch_assoc()){
      // echo json_encode($row);
      $orderno = $row['Order_No'] ;
      $orderbill = $row['Order_Bill'] ;
      $gallons = $row['Gallons'] ;
      $type = $row['Type'];
      $status = $row['Status'] ;


      
    echo "<tr><td> $orderno </td><td> $orderbill </td><td> $del_date </td>
    <td> $gallons </td> <td> $type</td><td>$status</td></tr>" ;
      
       

    }




    ?>
  </tbody>




</table>


<!-- <from method = "POST">
<div >
<button style="background-color:#1165D4; color: balck; height: 60px; weight: 200px;" type="button" name="payment"><a href="payment.php"><h6>Payment</h6></a></button>
  </form>
<Br><Br>
</div> -->




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