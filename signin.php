<!DOCTYPE html>
<html>
<head>
	<title>error</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php

include 'Connection.php';
session_start();
if (isset($_POST['btnSignin'])) {
$email = mysqli_real_escape_string($conn, $_POST['email']);

$result = mysqli_query($conn, "SELECT * FROM md_users WHERE email = '$email' OR username = '$email'");
if(mysqli_num_rows($result) == 0){

	echo "<script>swal('Login Failed','Invalid email or username','error')
		.then((value) => {
 		 window.location.href = \"index.php\";
 		 
});</script>";
}
else{
	$users = mysqli_fetch_assoc($result);
	  if(password_verify($_POST['password'], $users['password'])){
	  		$_SESSION['email'] = $users['email'];
			$_SESSION['username'] = $users['username'];
			$_SESSION['active'] = $users['active'];
			$_SESSION['id'] = $users['id'];
			$_SESSION['logged_in'] = true;

			
		
		if($_SESSION['active'] == 1 && $_SESSION['username'] == 'admin'){
			header("Location:admindash.php");
		}

		elseif($_SESSION['active'] == 1){

			header("Location: userdash.php");
		}
		elseif($_SESSION['active'] == 0){
			header("Location: profile.php");
		}

	}
	else{
		echo "<script>swal('Login Failed','Password entered is incorrect','error')
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