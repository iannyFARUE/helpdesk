<!DOCTYPE html>
<html>
<head>
	<title>verify</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
include 'Connection.php';
session_start();

if(isset($_GET['email']) && !empty($_GET['email']) AND $_GET['hash'] && !empty($_GET['hash'])){

	$email = mysqli_real_escape_string($conn,$_GET['email']);
	$hash = mysqli_real_escape_string($conn,$_GET['hash']);

	$result = mysqli_query($conn, "SELECT * FROM md_users WHERE email = '$email' AND hash = '$hash' AND active = '0'");


	if(mysqli_num_rows($result) == 0){
		// $_SESSION['message'] = "Users with that email already exist";
			echo "<script>swal('Verification Failed','User with that email already exist','error')
		.then((value) => {
 		 window.location.href = \"index.php\";
 		 
});</script>";

	}
	else{
		// $_SESSION['message'] = "Your account has been activated";
	
		

		mysqli_query($conn,"UPDATE md_users SET active = '1' WHERE email = '$email' ") or die(mysqli_error());
		$_SESSION['active'] = 1;
				echo "<script>swal('Verifiation successful','Your account has been verified','success')
		.then((value) => {
 		 window.location.href = \"index.php\";
 		 
       });</script>";
		
	}


}
else {
    // $_SESSION['message'] = "Invalid parameters provided for account verification!";
  		echo "<script>swal('Verification Failed','Invalid parameters provided for account verification!','error')
		.then((value) => {
 		 window.location.href = \"index.php\";
 		 
       });</script>";
}



?>

</body>
</html>


