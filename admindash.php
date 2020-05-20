<?php
/* Displays user information and some useful messages */
require 'Connection.php';
 include("adminChangeStatus.php");
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
</head>
<body id="userdash" >
	<div class="container-fluid">
		<div class="row" style="background-color: #fff; opacity: ">
			<div class="col-xs-2">
				<img src="images/logo.png">
			</div>
			<div class="col-xs-8">
			 <h2>MUROWA DIAMONDS HELP DESK 24/7<br></h2>
			 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			 	 <div class="collapse navbar-collapse" id="navbarNav">
	                     <ul class="navbar-nav">
	                        <li class="nav-item active">
	                           <a class="nav-link" href="use
	                          admindash.php">Dashboard<span class="sr-only">(current)</span></a>
	                         </li>
	                         <li class="nav-item">
	                           <a class="nav-link" href="#">Tickets</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#">Solutions</a>
	                         </li>
	                         <li class="nav-item">
	                            <a class="nav-link" href="#">Report</a>
	                         </li>
	                         <li class="nav-item">
	                            <a class="nav-link" href="#">Admin</a>
	                         </li>
	     
	                      </ul>
	                      <ul class="nav justify-content-end">
									  <li class="nav-item">
		   								 <a href="index.php" id="newTick" style="color: #fff"><i class="fa fa-user" style="font-size:24px"></i>&nbspLogout</a>
									  </li>
	                      	
	                      	
	                      </ul>

                </div>
		</nav>	
			</div>
			<div class="col-xs-2">
				<img src="images/logo.png">
			</div>
			
		</div>
		<div class="card">
			<div class="card-body" >
				<div class="row">
					<label class="col-form-label" style="font-size: 28px; color: #333;padding: 20px;">TICKET SUMMARY</label>
				</div>
				<div class="row">
					<div class="col-md-2"  id="border2">
					<a href="#"><i class="fa fa-star" style="font-size:40px;margin-right: 10px;"></i></a><h3 style="display: inline;font-size: 30px;">11</h3><br><p style="padding-left: 40px;">Unresolved</p>
						
					</div>
						<div class="col-md-2"  id="border2">
						<a href="#"><i class="fa fa-star" style="font-size:40px;margin-right: 10px;color: #ed3d21"></i></a><h3 style="display: inline;font-size: 30px;">0</h3><br><p style="padding-left: 40px;">Overdue</p>
						
					</div>
						<div class="col-md-2"  id="border2">
						<a href="#"><i class="	fa fa-hourglass-end" style="font-size:40px;margin-right: 10px;color: #d88477";></i></a><h3 style="display: inline;font-size: 30px;">7</h3><br><p style="padding-left: 40px;">Due Today</p>
						
					</div>
						<div class="col-md-2"  id="border2">
						<a href="#"><i class="fa fa-balance-scale" style="font-size:40px;margin-right: 10px; color: #00cb53;"></i></a><h3 style="display: inline;font-size: 30px;">11</h3><br><p style="padding-left: 40px;">Open</p>
						
					</div>
						<div class="col-md-2"  id="border2">
						<a href="#"><i class="fa fa-star" style="font-size:40px;margin-right: 10px;color: #2bd8d0"></i></a><h3 style="display: inline;font-size: 30px;">11</h3><br><p style="padding-left: 40px;">Onhold</p>
						
					</div>
						<div class="col-md-2"  id="border2">
						<a href="#"><i class="	fa fa-question" style="font-size:40px;margin-right: 10px;color: #8e625b"></i></a><h3 style="display: inline;font-size: 30px;">11</h3><br><p style="padding-left: 40px;">Unassigned</p>
						
					</div>
				</div>
				
			</div>
		</div><br><br>

		<div class="col-md-3" id="sidebar">
				<button class="btn danger" id="compose">Compose</button>
					<ul class="nav flex-column">
 						<li class="nav-item">
   						<a class="nav-link" href="#" onclick="ajax();">Inbox

   							<?php
                						$query = "SELECT * from `md_tickets` where `status` = '0' order by `date` DESC";
               							 if(showBadge()>0){
               							 ?>
   								 <span class="badge badge-warning" style="margin: 2px;color: red;"><?php echo showBadge(); ?></span>
   								   <?php
                }
                    ?>
   						</a>
  						</li>
  						<li class="nav-item">
    					<a class="nav-link" href="#" onclick="adminReply();">Sent Mail</a>
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
					<form action="adminReply.php" method="POST" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="requestor" class="col-md-3 col-form-label">Requestor</label>
							<div class="col-md-9">
							<input type="text" name="email" id="requestor" class="form-control" placeholder="enter email">
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
								
							<input type="submit" name="btnReply" value="Submit" class="btn btn-dark" id="submit">
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
							
							<form method="post" action="adminReply.php">
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
								
							<input type="submit" name="btnReply" value="Submit" class="btn btn-dark" id="submit">
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
	</div>





<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>