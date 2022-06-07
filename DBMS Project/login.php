

<?php 
session_start() ;

    include("connection.php");

   if($_SERVER['REQUEST_METHOD'] === 'POST'){
       //something was posted
       $email = $_POST['email'];
       $password = md5($_POST['password']);
	

       if(!empty($email)&& !empty($password)){
			
		$query = "select * from user_data where Email = '".$email."' AND User_Password = '".$password."' limit 1";
	 	//$query1 = "select Address from user_data where Email = '".$email."' limit 1";
		$result = mysqli_query($con,$query) ;
		//$address = mysqli_query($con,$query1);
		$data = $result->fetch_assoc() ;
			
		 if($result && mysqli_num_rows($result) > 0){
			 $_SESSION['company_name'] = $data['Company_Name'] ;
			 $_SESSION['address']=$data['Address'] ;
			 $_SESSION['User_ID']=$data['User_ID'];
			 $_SESSION['user_email'] =$data['Email'];

			 $to_email = $_SESSION['user_email'];

			 $subject = "LOGIN INFO";
			 $body = "You Have Lgogged In RainWaterHarvest";
			 $headers = "From: rainwh3@gmail.com";
			 
			 if (mail($to_email, $subject, $body, $headers)) {
				 echo "Email successfully sent to $to_email...";
			 } else {
				 echo "Email sending failed...";
			 }

			 header("Location: home.php");
			 die;
		 }





			// $query = "select * from user_data where Email='".$email."' AND User_Password ='".$password."' limit 1";

			// $result = mysqli_query($con,$query) ;

			// if(mysqli_num_rows($result)==1){
			// 	header("Location: home.php");
			// 	die ;
			// }

    //         $query = "select * from user_data where Email = '".$email."' limit 1";
	// 		$result = mysqli_query($con,$query) ;
	// 		if($result){
	// 			if(mysqli_num_rows($result)>0){
	// 				$user_data = mysqli_fetch_assoc($result);
	// 				if($user_data['password']=== $password){
	// 					$_SESSION['User_ID'] = $user_data['User_ID'];
	// 					header("Location: home.php");
	// 					die;
	// 				}
	// 			}
	// 		}


			echo "<h4 style= 'color:red;'>Wrong Email or Password</h4>" ;
       }else
       {
           echo "<h4 style= 'color:red;'>Please Enter Valid information!</h4>" ;
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
				<h2 style="text-align: center;">USER LOG IN</h2>
					<br>
					
					
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
			
					<div  class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
                    <div  >
					<a  href="userfg1.php">Forget Password?</a>
</div>
                <div style="padding-bottom: 50px;">
				
					<button >Login
						<i class="zmdi zmdi-arrow-right"></i>
                
					</button>
</div>
<div style="Text-Align: Center;" >
                    <a href="signup.php"><h4>Didn't Register Before? Click Here To Register</h4></a>
</div>
<br><br>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>