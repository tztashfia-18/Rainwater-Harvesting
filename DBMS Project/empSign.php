<?php


session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include("connection.php");
    $email=$_POST["email_address"];
    $i=$_POST["password"];
	$name=$_POST["employee_name"];
	$address=$_POST["adrs"];
	$number=$_POST["phone_no"];
	$checkUser = "select * from employee where email = '".$email."' AND Employee_Name = '".$name."' limit 1";
	   $res = mysqli_query($con,$checkUser);
	   $count = mysqli_num_rows($res);
	   if($count>0){
		echo "<h4 style='color:Red;'>Email or Employee Name Already Exists!!</h4>" ;
	   }
	   else{

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      
			
	
	$number=$_POST["phone_no"];
	$sql = "insert into employee (Employee_Name,pass,Address,Phone_No,email) values ('$name','$i','$address','$number','$email')";

             mysqli_query($con,$sql) ;


			 $b=0;
			 $to_email =  $email;
			 $subject = "Employee Login Details & Demo Password";
			 $body = "Your password is :    $i";
			 $headers = "From: rainwh3@gmail.com";
			 
			 if (mail($to_email, $subject, $body, $headers)) {
				 $b=1;
				
				
			 } else {
				 $b=3;
				
				
			 }


if($b==1){
	echo "<h4 style= 'color:blue;'>Mail Sent Successfully</h4>" ;
}
if($b==3){
	echo "<h4 style= 'color:red;'>Mail Not Sent</h4>" ;
}





			

            //header("Location: empLogin.php");
            die;
	   }
	   else{
		echo "<h4 style= 'color:red;'>Please Enter Valid Information</h4>" ;
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
					<h3>EMPLOYEE REGISTRATION FORM</h3>
					
					<div class="form-wrapper">
						<input type="text" placeholder="Employee Name" class="form-control" name="employee_name">
						<i class="zmdi zmdi-account"></i>
					</div>
                    
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email_address">
						<i class="zmdi zmdi-email"></i>
</div>
<div class="form-wrapper">
						<input type="text" placeholder="Contact No" class="form-control" name="phone_no">
						<i class="zmdi zmdi-phone"></i>
</div>
<div class="form-wrapper">
						<input type="text" placeholder="Address" class="form-control" name="adrs">
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
                    
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>