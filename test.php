<?php

require 'Connection.php';
session_start();
$email = $_SESSION['email'];
$id = $_SESSION['id'];

$query = "SELECT count(*) FROM md_admin_reply WHERE email = 'iannyfarai@gmail.com' AND status = '0'";
$run = $conn->query($query);
$row = mysqli_fetch_assoc($run);
echo $row['count(*)'];

?>