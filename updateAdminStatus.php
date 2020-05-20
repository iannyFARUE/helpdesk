<?php
require 'Connection.php';
$email = $_POST['uemail'];
$id = $_POST['uid'];
$query = "UPDATE md_tickets SET status = '1' WHERE id = '$id' AND email = '$email'";
$run = $conn->query($query);
if($run){
	echo "Success";
}
else{
	echo "Failure";
}
?>