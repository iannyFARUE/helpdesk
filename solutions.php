
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
 
	}
?>
<DOCTYPE html>
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
    
   
	<title></title>

</head>
<body id="userdash">
	<div class="container-fluid">
		<div class="row" style="background-color: #fff; opacity: ">
			<div class="col-xs-3">
				<img src="images/logo.png">
			</div>
			<div class="col-xs-7">
			 <h2>MUROWA DIAMONDS HELP DESK 24/7<br></h2>
			 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			 	 <div class="collapse navbar-collapse" id="navbarNav">
	                     <ul class="navbar-nav">
	                        <li class="nav-item active">
	                           <a class="nav-link" href="userdash.php">Home <span class="sr-only">(current)</span></a>
	                         </li>
	                         <li class="nav-item">
	                           <a class="nav-link" href="ticket.php">Tickets</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="solutions.php">Solutions</a>
	                         </li>
	     
	                      </ul>
                </div>
		</nav>	
		</div>
			<div class="col-xs-2">
				<input type="image" src="images/ian.jpg" name="logout" id="logout" width="100px" height="70px" class="rounded-circle">
			</div>
			
		</div>
		<div  class="container" id="signout_panel">
				<div class="card">
				<div class="card-body">
					<div class="row">
					<div class="col-md-4">
						<input type="image" src="images/ian.jpg" name="logout" width="100px" height="100px" class="rounded-circle">
					</div>
					<div class="col-md-8">
						<p style="padding-left: 20px;"><strong><?php echo"$username";?></strong></p>
						<p style="padding-left: 20px;"><?php echo"$email";?></p>
					</div>
				</div>
				</div>
	       <div class="card-footer text-muted">
	       	 <a href="logout.php" id="logout" class="btn btn-primary">Signout</a>
    
 		 </div>
			</div>
			</div>


				<footer class="footer" style="padding: 8px 20px 0px 450px">
			<p> &copy2018 Murowa Diamonds &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Terms of Use</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Privacy and Cookies</a></p>
		</footer>
	</div>




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>