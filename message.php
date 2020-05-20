<?php

require 'Connection.php';
session_start();

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
$query = "SELECT * FROM md_tickets ORDER BY id DESC";
$run = $conn->query($query);
 while ($row = $run->fetch_array()) :


 ?>

 
<?php endwhile; ?>
   <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          <img src="images/ian.jpg" width="100px" height="50px">
        </div>
        <div class="col-md-2">
          <p><?php echo $_SESSION['newMessage'];?></p>
        </div>
      </div>
    </div>
  </div>
   




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
