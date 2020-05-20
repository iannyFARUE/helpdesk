<!DOCTYPE html>
<html>
<head>
	<title>error</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require 'Connection.php';
session_start();

if(isset($_POST['btnforgot'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$result = mysqli_query($conn, "SELECT * FROM md_users WHERE email = '$email'");
	if ($result -> num_rows == 0) {
		// $_SESSION['message'] = "User with this email does not exit";
			echo "<script>swal('Reset Failed','User with this email does not exist','error')
		.then((value) => {
 		 window.location.href = \"forgotprocessing.php\";
 		 
	});</script>";
	}
	else{
		$user = mysqli_fetch_assoc($result);
		$email = $user['email'];
		$hash = $user['hash'];
		$firstname = $user['username'];

		$_SESSION['message'] = "<p>Please check you email<span>$email</span>".
								"For confirmation to complete password reset1!!!";


			//sending email to user 
								$to = $email;
								$subject = 'Password reset';
								$message_body = '
								Hello '.$firstname.',
								You have requested a password reset
								To complete password reset click the link below

								http://localhost:8080/murowaHelpDesk/reset.php?email='.$email.'&hash='.$hash;

						
								if (mail($to, $subject, $message_body, 'From:iannyfarai@gmail.com')) {
									echo "<script>swal('Email Status','Mail send','success')
											.then((value) => {
									 		 window.location.href = \"index.php\";
									 		 
									});</script>";
								}
								else{
										echo "<script>swal('Email Status','Mail not send','error')
											.then((value) => {
									 		 window.location.href = \"index.php\";
									 		 
									});</script>";

								}
}
}


?> 

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
