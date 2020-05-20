<?php
require 'Connection.php';


function showBadge(){
require 'Connection.php';
$email = $_SESSION['email'];
$id = $_SESSION['id'];

$query = "SELECT count(*) FROM md_admin_reply WHERE email = '$email' AND status = '0'";
$run = $conn->query($query);
$row = mysqli_fetch_assoc($run);
return $row['count(*)'];
}

function updateStatus($message_id){
	require 'Connection.php';
	$query = "UPDATE md_admin_reply SET status = '1' WHERE message_id = '$message_id'";
	$run = $conn->query($query);

}


?>