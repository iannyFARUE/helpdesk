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
   

if(isset($_POST['btnReply'])){
  
     $email= mysqli_real_escape_string($conn,$_POST['email']);
     $subject = mysqli_real_escape_string($conn,$_POST['subject']);
     $message = mysqli_real_escape_string($conn,$_POST['message']);
  
       $sql = "INSERT INTO md_tickets(email,subject,message,date_send) VALUES('$email','$subject','$message',now())";
  if (mysqli_query($conn, $sql)) {
  echo "<script>swal('Status' ,'Reply was successfull submited','success')
    .then((value) => {
    window.location.href = \"userdash.php\";

});</script>";
     }
     else{
      echo "<script>swal('Status','Reply error not send','error')
    .then((value) => {
    window.location.href = \"userdash.php\";


});</script>";
}
}

?>

</body>
</html>
