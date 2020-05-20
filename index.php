<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Passion+One|Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script defer type="text/javascript" src="js/fontawesome-all.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
   
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
			 <nav class="navbar navbar-expand-lg navbar-light bg-light">
			 	 <div class="collapse navbar-collapse" id="navbarNav">
	                     <ul class="navbar-nav">
	                        <li class="nav-item active">
	                           <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	                         </li>
	                         <li class="nav-item">
	                           <a class="nav-link" href="#">Solutions</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#">Getting Started</a>
	                         </li>
	     
	                      </ul>
                </div>
		</nav>


			</div>
			<div class="col-md-2">
			<span><h3>04-774231</h3></span>
			</div>
			
		</div>
			<button id="btn1" class="btn1 inverse" width="400px">Login &nbsp&nbsp&nbsp<i class="fa fa-angle-right" style="color: red;"></i><i class="fa fa-angle-right" style="color: red;"></i></button>
		<div class="container" style="width:400px;margin-top:50px;" id="signin_panel">
			<div class="card" >
			<div class="card-body">
				<div class="row">
					<div class="col-md-10">
						<img src="images/logo.png"><br>
					</div>
					<div class="col-md-1">
						<a href="index.php" id="close"><span class="glyphicon glyphicon-remove" style="color-rendering: red;"></span></a>
						
					</div>
				</div>
				<h4 id="sign">SIGN IN</h4>
				<form action="signin.php" method="post">
					<input type="text" name="email" class="form-control" placeholder="enter email/username"><br>
					<input type="password" name="password" class="form-control" placeholder="enter password"><br>
					<div><a href="forgot.php" id="forgot">Forgot password ?</a></div><br>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="remCheck">&nbsp&nbsp&nbsp
					  <label class="form-check-label" for="remCheck">
					    Remember me
					  </label>
					</div><br>
					<input type="submit" name="btnSignin" width="500px" value="Sign in" id="signin"><br><br>
					<p>No Account? <a href="#" id="create">Create one</a></p>
				</form>
			</div>
		</div>
		</div>
	
		<!-- <input type="submit" name="btn-submit" class="btn1 inverse" value="Login" width="400px"> -->
		<div class="container" style="width:500px;margin-top:30px;" id="signup_panel">
			<div class="card" style="background-color: #333">
				<div class="card-body">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4"><img src="images/logo.png"><br></div>
						<div class="col-md-3">
						</div>
					</div><br>
					<h4 id="sign">SIGN UP</h4><br><br>
					<form action="signup.php" method="post" onsubmit="return validate();">
					<input type="text" name="email" class="form-control" placeholder="enter email" required=""><br>
					<input type="text" name="username" class="form-control" placeholder="enter username" required=""><br>
					<input type="password" name="password" class="form-control" placeholder="enter password" id="password" required=""><br>
					<input type="password" name="passwordConfirm" class="form-control" placeholder="confirm password" id="passconfirm" required=""><br>
					<p id="result" style="color:red;margin: 0px;"></p>
					<div class="row">
						<div class="col-md-5">
						<input type="submit" name="btnsubmit" value="Register" id="register" class="btn btn-dark">
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-3">
								<br><a href="index.php">Go Back</a>
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
<script type="text/javascript" src="js/javascript.js"></script>

</body>
</html>