<?php

require 'Connection.php';
session_start();
$email = $_SESSION['email'];
$id = $_SESSION['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
	<script type="text/javascript" src="js/javascript.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dashstyle.css">
  

</head>
<body>
<?php
// $query = 'SELECT * FROM md_tickets ORDER BY id DESC';
$query = "SELECT count(*) FROM md_admin_reply WHERE email = '$email' AND status = '0' ";
$run = $conn->query($query);

$row = mysqli_fetch_assoc($run);





?>
<?php echo $row['count(*)'];?>






<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
