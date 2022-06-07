<?php
 $showError=false;
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
	include("connection.php");
    
    $username=$_POST["adminname"];
    $p=$_POST["password"];

	$sql = "Select * from admin where admin_name='$username' AND password='$p'";
    $result = mysqli_query($con, $sql);
	$data = $result->fetch_assoc() ;
    $num = mysqli_num_rows($result);
    if ($num == 1){
    
        $_SESSION['try'] =$data['admin_name'];

		$to_email = "rainwh3@gmail.com";

		$subject = "LOGIN INFO";
		$body = "You Have Lgogged In RainWaterHarvest";
		$headers = "From: rainwh3@gmail.com";
		
		if (mail($to_email, $subject, $body, $headers)) {
			echo "<h4 style= 'color:blue;'>Email successfully sent to $to_email...</h4>";
		} else {
			echo "<h4 style= 'color:red;'>Email sending failed...</h4>";
		}

        header("location: adminHome.php");

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
          echo"<h4 style= 'color:red;'>Login Error!!!</h4>";
          
            
         }

        ?>

		<div class="wrapper" style="background-image: url('Images/Loginbackground.jpg');">
			<div class="inner">
				<div style="height: 30px; weight: 30px;" class="image-holder">
					<img src="Images/LogoHome.png" alt="">
				</div>
				<form action="" method="POST">
					<h4 style="text-align: center;">ADMIN LOG IN</h4>
					<br>
					
					<div class="form-wrapper">
						<input type="text" placeholder="User Name" class="form-control" name="adminname" value="">
						<i class="zmdi zmdi-email"></i>
					</div>
			
					<div  class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password" value="">
						<i class="zmdi zmdi-lock"></i>
					</div>
                    <div  >
					
</div>
                <div style="padding-bottom: 50px;" >
					<button >Login
						<i class="zmdi zmdi-arrow-right"></i>
                
					</button>
</div>


				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>