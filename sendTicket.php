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
   

if(isset($_POST['btnTicket'])){
	$username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
     $message = mysqli_real_escape_string($conn,$_POST['message']);
     $result = mysqli_query($conn, "SELECT * FROM md_users WHERE email = '$email' AND username = '$username'");
     $row = mysqli_fetch_assoc($result);
     $userid = $row['id'];
       $sql = "INSERT INTO md_tickets(user_id,email,subject,message,date_send) VALUES('$userid','$email','$subject','$message',now())";
  if (mysqli_query($conn, $sql)) {
  echo "<script>swal('Status' ,'Ticket successfully submited','success')
		.then((value) => {
 		window.location.href = \"userdash.php\";

});</script>";
     }
     else{
     	echo "<script>swal('Status','Ticket not send','error')
		.then((value) => {
 		window.location.href = \"userdash.php\";


});</script>";
}
}

?>

</body>
</html>