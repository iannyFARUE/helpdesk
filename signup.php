<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php

require 'Connection.php';
session_start();
if (isset($_POST['btnsubmit'])) {
	
/*setting session variables to be used on the profile.php page */
$_SESSION['email'] = $_POST['email'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];


/*capturing user information on the form using post method */
$email = mysqli_real_escape_string($conn,$_POST['email']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,password_hash($_POST['password'],PASSWORD_BCRYPT));
$hash = mysqli_real_escape_string($conn, md5(rand(1,100)));

$result = mysqli_query($conn, "SELECT * FROM md_users WHERE email = '$email'");
if(mysqli_num_rows($result) > 0){
	
echo "<script>swal('Signup Failed','User with that email already exist','error')
		.then((value) => {
 		window.location.href = \"index.php\";

});</script>";
		
}
else{
	$result = mysqli_query($conn, "SELECT * FROM md_users WHERE username = '$username'");
	if(mysqli_num_rows($result) > 0){
	echo "<script>swal('Signup Failed','User with that username already exist','error')
		.then((value) => {
 		window.location.href = \"index.php\";

});</script>";
	}
	else{


	$sql = "INSERT INTO md_users(username,email,password,hash,date_joined) VALUES('$username','$email','$password','$hash',now())";

	if(mysqli_query($conn, $sql)){
		$_SESSION['active'] = 0;
		$_SESSION['logged_in'] = true;
			$_SESSION['status'] = "Confirmation of email";

		$_SESSION['message'] = "Confirmation link has been send to $email please verify
								 you account by clicking on the link in the message";

								
		/*verification of email*/
		$to = $email;
		$subject = 'Account verification(MurowaHelpDesk.com)';
		$message_body='
				hello '.$username.',
				Thank you for signing up!,
				Please click on this link to verify you account,
				https://da090af6.ngrok.io/murowaHelpDesk/verify.php?email='.$email.'&hash='.$hash;
				mail($to,$subject,$message_body,"From:".$to);
				header('location:profile.php');
	}
	else{
		//$_SESSION['message']= "Registration failed ";
		echo "<script>swal('Signup Failed','Registration failed,'error')
		.then((value) => {
 		window.location.href = \"index.php\";

});</script>";
	
	}
}
}
}





?>


</body>
</html>
