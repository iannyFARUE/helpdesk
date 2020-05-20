<?php
require 'Connection.php';
$email = $_POST['uemail'];
$id = $_POST['uid'];
$query = "UPDATE md_admin_reply SET status = '1' WHERE message_id = '$id' AND email = '$email'";
$run = $conn->query($query);
if($run){
	echo "Success";
}
else{
	echo "Failure";
}
?>