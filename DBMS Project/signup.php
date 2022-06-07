<?php 
session_start() ;

    include("connection.php");
   // include("functions.php");

   if($_SERVER['REQUEST_METHOD'] === 'POST'){
       //something was posted
       $user_name = $_POST['company_name'];
       $password = $_POST['password'];
       $phone_no = $_POST['phone'];
       $address = $_POST['address'];
       $email = $_POST['email'];
	   

	   $checkuser = "select * from user_data where Email = '".$email."' AND Company_Name = '".$user_name."' limit 1";
	   $result = mysqli_query($con,$checkuser);
	   $c = mysqli_num_rows($result);
	   if($c>0){
		echo "Email or Company Name Already Exists!!" ;
	   }
	   else{

       if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //save to database
			
			$md5password = md5($password);
            $query = "insert into user_data (Company_Name,User_Password,Address,Phone_No,Email) values ('$user_name','$md5password','$address','$phone_no','$email')";

             mysqli_query($con,$query) ;

			 $to_email = $email;

			 $subject = "REGISTRATION INFO";
			 $body = "You Have Registered In RainWaterHarvest";
			 $headers = "From: rainwh3@gmail.com";
			 
			 if (mail($to_email, $subject, $body, $headers)) {
				 echo "<h4 style= 'color:blue;'>Email successfully sent to $to_email...</h4>";
			 } else {
				 echo "<h4 style= 'color:red;'>Email sending failed...</h4>";
			 }

			

            header("Location: login.php");
            die;

       }else
       {
           echo "<h4 style= 'color:red;'>Please Enter Valid Information</h4>";
	   }
   
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

		<div class="wrapper" style="background-image: url('images/Loginbackground.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/LogoSign.PNG" alt="">
				</div>
				<form method = "POST" action="">
					<h3>USER REGISTRATION FORM</h3>
					
					<div class="form-wrapper">
						<input type="text" placeholder="Username Or Company Name" class="form-control" name="company_name">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
</div>
<div class="form-wrapper">
						<input type="text" placeholder="Contact No" class="form-control" name="phone">
						<i class="zmdi zmdi-phone"></i>
</div>
<div class="form-wrapper">
						<input type="text" placeholder="Address" class="form-control" name="address">
						<i class="zmdi zmdi-home"></i>
</div>

					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					
                    <div style="padding-bottom: 20px;">
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
						
					</button>
</div>
                    <div style="Text-Align: Center;" >
                    <a href="login.php"><h4>Already Registered? Click Here To Log In</h4></a>
</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>