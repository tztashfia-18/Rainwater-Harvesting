<?php
 $showError=false;
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
	include("connection.php");
    
    $email=$_POST["email"];
    $i=$_POST["password"];

	$sql = "Select * from employee where email='$email' AND pass='$i' limit 1";
    $result = mysqli_query($con, $sql);
	$data = $result->fetch_assoc() ;
    $num = mysqli_num_rows($result);
    if ($num > 0){
    
        $_SESSION['employee_name'] =$data['Employee_Name'];
		$_SESSION['adrs'] =$data['Address'];
	    $_SESSION['Employee_ID'] =$data['Employee_ID'];
        header("location: emphome.php");
		die ;
    } 
    else{
		

        $showError =true;
    }

}






?>



























<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/st.css">
	</head>

	<body>
	<?php
         if($showError){
          echo"<h4 style= 'color:red;'>Wrong password or email</h4>";
          
            
         }

        ?>
		<div class="wrapper" style="background-image: url('Images/Loginbackground.jpg');">
			<div class="inner">
				<div style="height: 30px; weight: 30px;" class="image-holder">
					<img src="Images/LogoLOG.PNG" alt="">
				</div>
				<form action="" method="POST">
				<br>
					
					<br><br>
				<h2 style="text-align: center;">EMPLOYEE PASSWORD RESET</h2>
                <br><br><br><br>
					
					
                <div  class="form-wrapper">
						<input type="password" placeholder="New Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
                    
					<div  class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
			<br><br><br>
					
                    <div  >
					<a  href="userPass.php">Click To Reset</a>

                    <br><br><br><br><br><br>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>