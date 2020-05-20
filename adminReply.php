<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require 'Connection.php';

if(isset($_POST['btnReply'])){
  
     $email= mysqli_real_escape_string($conn,$_POST['email']);
     $subject = mysqli_real_escape_string($conn,$_POST['subject']);
     $message = mysqli_real_escape_string($conn,$_POST['message']);
     $result = mysqli_query($conn, "SELECT * FROM md_users WHERE email = '$email'");
if(mysqli_num_rows($result) == 0){

  echo "<script>swal('Reply Status','Invalid email or username','error')
    .then((value) => {
     window.location.href = \"admindash.php\";
     
});</script>";
}
else{
     $row = mysqli_fetch_assoc($result);
     $userid = $row['id'];
  $sql = "INSERT INTO md_admin_reply(id,email,subject,message,date_send) VALUES('$userid','$email','$subject','$message',now())";
  if (mysqli_query($conn, $sql)) {
  echo "<script>swal('Status' ,'Reply was successfull submited','success')
    .then((value) => {
    window.location.href = \"admindash.php\";

});</script>";
     }
     else{
      echo "<script>swal('Status','Reply error not send','error')
    .then((value) => {
    window.location.href = \"admindash.php\";


});</script>";
}
}
  
}

  


?>

</body>
</html>
