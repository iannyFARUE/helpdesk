<?php
/* Displays user information and some useful messages */
require 'Connection.php';
  include("changeStatus.php");
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
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/dashstyle.css">
   
	<title></title>
	<script type="text/javascript">
		

	</script>

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
				<div class="card" 	style="z-index: 2;">
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

		<div class="card" style="z-index: 1;">
			<div class="card-body">
				
	<div class="row">
	<div class="col-md-7">
		<h3 style="font-weight: bold;">HOW CAN WE HELP YOU TODAY ?</h3>
	<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Enter search term here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="input-group-append">
    <button class="btn btn-dark" type="button">Search</button>
  	</div>
	</div>			
</div>
<div class="col-md-1">
	
</div>
<div class="col-md-3 border1">
<div class="row">
	<div class="col-md-12" style="margin: 5px;">
		<a href="#" id="newTick" style="font-weight: bold"><i class="fa fa-plus-circle" style="font-size:20px;color: black;"></i>&nbspNew support ticket</a><br>
	</div>
	<div class="col-md-12" style="margin: 5px;">
		<a href="#" id="newTick" style="font-weight: bold"><i class="	fa fa-file" style="font-size:20px;color: black;"></i>&nbspCheck ticket status</a><br>
	</div>
</div>
	
</div>
			</div>
			</div>
		</div>
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<div class="row">
				<div class="col-md-6">
					<b>All Tickets</b>&nbsp<i class="fa fa-caret-down" style="font-size:20px"></i><br>sorted by date created&nbsp<i class="fa fa-caret-down" style="font-size:20px"></i>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4"><a href="#" id="newTick" style="font-weight: bold">Export Ticket</a></div>
						
					
				</div>
		</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md-3" id="sidebar">
				<button class="btn danger" id="compose">Compose</button>
					<ul class="nav flex-column">
 						 <li class="nav-item">
   								 <a class="nav-link active" href="#" onclick="viewInbox();">Inbox
   								 	  <?php
                						$query = "SELECT * from `md_admin_reply` where `status` = '0' AND `email` = '$email' order by `date` DESC";
               							 if(showBadge()>0){
               							 ?>
   								 <span class="badge badge-warning" style="margin: 2px;color: red;"><?php echo showBadge(); ?></span>
   								   <?php
                }
                    ?>
                    </a>

  							</li>
  						<li class="nav-item">
    								<a class="nav-link" href="#" onclick="viewOutBox();">Sent Mail</a>
 							 </li>
 						 <li class="nav-item">
   								 <a class="nav-link" href="#">Draft</a>
 						 </li>
		</div>
	<div class="col-md-9" id="centerbar">
		<p style="text-align: center;">We did'nt find anything to show.......</p>
		

	</div>

	<div id="returnTicket">
			<div class="card" style="width:750px;background-color: #fff;padding: 30px;margin: 30px;">
			
			<div class="card-body">
					<div class="row">
					<div class="col-md-10">
						<img src="images/logo.png"><br>
					</div>
					<div class="col-md-2"></div>
					</div>
					<div class="row">
						<div class="col-md-5"></div>
							<h3 id="sendTick">SEND A TICKET</h3><br>
					</div>
					</div>
					<form action="sendTicket.php" method="POST" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="requestor" class="col-md-3 col-form-label">Requestor</label>
							<div class="col-md-9">
							<input type="text" name="email" id="requestor" class="form-control" placeholder='<?php echo "$email";?>' readonly>
							</div>
						</div>


						<div class="form-group row">
							<label for="subject" class="col-md-3 col-form-label">Subject</label>
							<div class="col-md-9">
								<input type="text" name="subject" id="subject" class="form-control" placeholder="e.g AXapta">
							</div>
						</div>
						<div class="form-group row">
							<label for="message" class="col-md-3 col-form-label">Message</label>
							<div class="col-md-9">
								<textarea class="form-control" id="message" rows="5" name="message"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-2"></div>
							<div class="col-md-3">
								
							<input type="submit" name="btnTicket" value="Submit" class="btn btn-dark" id="submit">
							</div>
							<div class="col-md-3">
								
							<input type="submit" name="cancel" value="Cancel" class="btn btn-dark" id="cancel">
							</div>
						</div>
					</form>
					</div>
					
		
				</div>

							<div id="replyTicket" >
					<div class="card"  style="background-color: #fff;margin:10px;min-height: 500px;">
						<div class="card-body">
							
							<form method="post" action="sendTicket.php">
							<div class="form-group row">
							<label for="requestor" class="col-md-3 col-form-label">Requestor</label>
							<div class="col-md-9">
							<input type="text" name="email" id="requestor" class="form-control" placeholder="enter email" value="" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="message" class="col-md-3 col-form-label">Subject</label>
							<div class="col-md-9">
								<input type="text" name="subject" id="subject" class="form-control" placeholder="enter subject" value="" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="message" class="col-md-3 col-form-label">Message</label>
							<div class="col-md-9">
								<textarea class="form-control" id="message" rows="5" name="message"></textarea>
							</div>
						</div>
							<div class="form-group row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								
							<input type="submit" name="btnTicket" value="Submit" class="btn btn-dark" id="submit">
							</div>
							<div class="col-md-3">
								
							<input type="submit" name="cancel" value="Cancel" class="btn btn-dark" id="cancel">
							</div>
						</div>
								
							</form>
						</div>
					</div>
				</div>
		



				<footer class="footer" style="padding: 8px 20px 0px 450px">
			<p> &copy2018 Murowa Diamonds &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Terms of Use</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Privacy and Cookies</a></p>
		</footer>
	
	





<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>