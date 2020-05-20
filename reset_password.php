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
<?php
require 'Connection.php';
session_start();

if(isset($_POST['btnreset'])){
if($_POST['password'] == $_POST['verifypassword']){

	$password = mysqli_real_escape_string($conn,password_hash($_POST['password'],PASSWORD_BCRYPT));

	$email = mysqli_real_escape_string($conn, $_POST['email']);
		$hash = mysqli_real_escape_string($conn, $_POST['hash']);

		$sql = "UPDATE md_users SET password = '$password', hash = '$hash' WHERE email = '$email'";
		if(mysqli_query($conn, $sql)){
			//$_SESSION['message'] = "Password reset is successful";
				echo "<script>swal('Reset Status','Password reset is successful','success')
											.then((value) => {
									 		 window.location.href = \"index.php\";
									 		 
									});</script>";
		}

}
else{
		echo "<script>swal('Reset Status','Password entered does not match','error')
											.then((value) => {
									 		 window.location.href = \"reset.php\";
									 		 
									});</script>";

}
}


?>
	
		<footer class="footer" style="padding: 8px 20px 0px 450px">
			<p> &copy2018 Murowa Diamonds &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Terms of Use</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Privacy and Cookies</a></p>
		</footer>




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

 