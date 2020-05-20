<?php
/* Displays user information and some useful messages */
require 'Connection.php';
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  // $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: index.php");    
}
else {
    // Makes it easier to read
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
  // $message = $_SESSION['status'];
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Passion+One|Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script defer type="text/javascript" src="js/fontawesome-all.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
   
	<title></title>

</head>
<body id="bodyy">
	<div class="container-fluid">
		<div class="row" style="background-color: #fff; opacity: ">
			<div class="col-md-3">
				<img src="images/logo.png">
			</div>
			<div class="col-md-7">
			 <h2>MUROWA DIAMONDS HELP DESK 24/7<br></h2>
			</div>
		</div>
		<?php

     
          // Display message about account verification link only once
          if ( isset($message) )
          {
              // echo $_SESSION['message'];
             	echo "<script>swal('Registration success','Mail verification link has been send','success')
		.then((value) => {
 		window.location.href = \"profile.php\";

			});</script>";
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
      
          if ( !$active ){
              echo
              '<div class="row">
              <div class="col-md-3"></div>	
              <div class="col-md-6">

              <div class="card" style="width:600px; margin-top:300px">
			<div class="card-body">
			<div class="row">
			 <div class="col-md-4"></div>	
			  <div class="col-md-6">
					<h2 class="card-title">WELCOME</h2></div>	
			</div>
				<div class="row">
			 <div class="col-md-5"></div>	
			  <div class="col-md-6">
					<h4 class="card-subtitle mb-2 text-muted">'.$username.'</h4>
			</div>
			</div>
			
					
					<p class="card-text"> Account is unverified, please confirm your email by clicking
              		on the email link!</p>
					 <a href="logout.php" class="btn btn-primary" name="logout">Logout</a>
			</div>
			</div>	
		</div>
		</div>';
          }
	
	    ?>
	
		<footer class="footer" style="padding: 8px 20px 0px 450px">
			<p> &copy2018 Murowa Diamonds &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Terms of Use</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Privacy and Cookies</a></p>
		</footer>
	</div>




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

 