<?php
$id=$_GET['id'];

include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){


 
    $reply=$_POST["reply"];
    
   
   
  
    
    $query = "UPDATE `emp_contact` SET `Reply`=' $reply' WHERE ID='$id'";
    mysqli_query($con,$query) ;
    header("Location: contacts.php");
  
  
  }




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

  
  <article style="background-color: #A3D0F3; padding-left: 50px;" data-wow-delay=".15s">
<Br>
<h4>Messaging Option</h4>

<Br><Br>




<form method="POST" action="">








<h5><b>Reply</b></h5><br>
<input style="height: 150px; width: 300px"aria-label="Default select example" name = "reply" required> </index> <br>

    <button class='button button-xs button-primary button-winona'>Sent</button>
<Br><Br>

</form>
</article>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>