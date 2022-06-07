

<?php 
session_start() ;

    include("connection.php");

	$code=rand(1000,10000);
	$_SESSION['code']=$code;

   if($_SERVER['REQUEST_METHOD'] === 'POST'){
       //something was posted
       $email = $_POST['email'];
	   
	   
      
	

      
			
		$query = "select * from user_data where Email = '$email'";
		$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
	 	
		
		
		
		 if($num == 1){
			 
			 
			 $_SESSION['newemail'] = $email;

			 $to_email = $email;
$subject = "Reset Code";
$body = "Hi, Your reset code is $code ";
$headers = "From: rainwh3@gmail.com";
       if (mail($to_email, $subject, $body, $headers)) {
    
} else {
    
}
 
			 header("Location: userfg2.php");
			 
		 }





       
	   else{
		   echo"Email Cannot Found";
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

		<div class="wrapper" style="background-image: url('Images/Loginbackground.jpg');">
			<div class="inner">
				<div style="height: 30px; weight: 30px;" class="image-holder">
					<img src="Images/LogoLOG.PNG" alt="">
				</div>
				<form action="" method="POST">
                <br>
					
					<br><br>
				<h2 style="text-align: center;">USER PASSWORD RESET</h2>
                <br><br><br><br>
					
					
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>

					</div>
			<br><br><br>
					
                    <div>

					<button   type="submit" >Click Here To Get Setup Code <i class="zmdi zmdi-arrow-right"></i></button >

                    <br><br><br><br><br><br>
					</div>

				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>