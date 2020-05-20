<?php

require 'Connection.php';
session_start();
$email = $_SESSION['email'];
echo "$email";

?>