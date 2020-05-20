<?php

require 'Connection.php';
include("changeStatus.php");
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
$query = "SELECT * FROM md_admin_reply WHERE email = '$email' ORDER BY message_id DESC";
$run = $conn->query($query);
echo "<div id='holder'>";
 while ($row = $run->fetch_array()) :





 ?>



   <div class="listTicket" >
     <ul class="nav flex-column">
      
         
               <li class="nav-item" onclick="showMessages(); updateStatus('<?php echo $row['message_id'];?>','<?php echo $row['email'];?>');">
                  <div class="row">
                     <div class="col-md-4">

                        <a href="#" name="emaildisplay"  ><?php echo $row['email']; ?></a>
                     </div>
                     <div class="col-md-2">
                        <a href="#"><?php
                        $out = strlen($row['subject']) > 10 ? substr($row['subject'],0,10)."..." : $row['subject'];
                         echo $out ; $_SESSION['newSubject'] = $row['subject'];?></a>
                     </div>
                     <div class="col-md-3">
                        <a href="#"><?php
                        $out = strlen($row['message']) > 20 ? substr($row['message'],0,20)."..." : $row['message'];
                         echo $out ; $_SESSION['newMessage'] = $row['message'];?></a>
                     </div>
                     <div class="col-md-2">
                        <a href="#"><?php echo $row['date_send']; ?></a>
                     </div>
                     </div>
                    
                     </li>
           </ul> 

          <div id="showMe">
         <div class="card" style="background-color: #fff;margin:0px;min-height: 500px;">
         
        <div class="card-body">
          <div class="row">
         <div class="col-md-2">
          <img src="images/ian.jpg" width="100px" height="50px">
        </div>
        <div class="col-md-6">
          <p style="padding: 2px;margin: 2px;font-size: 12px;"><strong><?php echo $row['email'];?></strong></p>
          <p style="font-size: 12px;">from:ITSupport@Murowadiamonds.com</p>
          <p style="padding: 2px;margin: 2px;font-size: 12px;"><strong><?php echo $row['subject'];?></strong></p>
             <input type="hidden" name="useremail" value="<?= $row['email'] ?>" id="emailUser"> 
             <input type="hidden" name="usersubject" value="<?= $row['subject'] ?>" id="subjectUser"> 
        
        </div>
        <div class="col-md-4">
           <p style="padding: 2px;margin: 2px;font-size: 12px;"><?php echo $row['date_send']; ?></p>
        </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
               <p style="padding: 2px;margin: 2px; font-size: 16px;"><?php echo $row['message']; ?></p>
         </div>
         <div class="col-md-2"></div>
      </div>
   
  </div>
  <div class="card">
     <div class="card-body">
         <p style="padding: 2px;margin: 2px; font-size: 13px;">  Click here to &nbsp<a href="#" onclick="replyFunction();"  id="reply">Reply</a></p>
     </div>
  </div>
      
  </div>
  </div>
 
   </div>
  

<?php endwhile; 

echo "</div>";?>






<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
