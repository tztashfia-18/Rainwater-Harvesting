

<?php 
session_start() ;

    include("connection.php");
	

   if($_SERVER['REQUEST_METHOD'] === 'POST'){
       //something was posted
       $tcode = $_POST['email'];
	   if($tcode==$_SESSION['code']){
		header("Location: userfg3.php");
	   }
	   else{
		   echo"<h4 style= 'color:red;'>Code is Wrong</h4>";
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
						<input type="text" placeholder="Insert Code" class="form-control" name="email">
						
					</div>
                    <br><br><br>
					<div>

<button   type="submit" >Send <i class="zmdi zmdi-arrow-right"></i></button >


</div>
					
                    
                    <br><br><br><br><br><br>

				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>