<?php

require 'Connection.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
  <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dashstyle.css">
  

</head>
<body>
<?php
$query = "SELECT * FROM md_tickets ORDER BY id DESC";
$run = $conn->query($query);
echo "<div id='holder'>";
 while($row = $run->fetch_array()) :





 ?>



   <div class="listTicket" >
     <ul class="nav flex-column">
      
         
               <li class="nav-item" onclick="showMessages(); updateAdminStatus('<?php echo $row['id'];?>','<?php echo $row['email'];?>');">
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
         <div class="card" id="ian" style="background-color: #fff;margin:0px;min-height: 500px;">
         
          <div class="card-body">
          <div class="row">
         <div class="col-md-2">
          <img src="images/ian.jpg" width="100px" height="50px">
        </div>
        <div class="col-md-6">
          <p style="padding: 2px;margin: 2px;font-size: 12px;"><strong><?php echo $row['email'];?></strong></p>
          <p style="font-size: 12px;">to:ITSupport@Murowadiamonds.com</p>
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

  <span style="padding: 2px;margin: 2px; font-size: 13px;">  Click here to &nbsp<a id="reply" href="#" onclick="replyFunction();">Reply</a>
<!-- <select id="selectStatus" onchange="selectStatus();" style="width:200px;">
<option disabled selected value> -- select an option -- </option>
<option value="unresolved">Unresolved</option>
<option value="open">Open</option>
<option value="Processing">Processing</option>
<option value="Closed">Closed</option>


</select> -->
</span>
<!--  <button type="button" class="btn btn-primary" id="btnProgress" style="position: absolute;top: -12px;left:450px;height: 30px;width: 50px;display: none;" onclick="progressStatus();">OK</button> -->
       </div>

     </div>
  </div>
      
  </div>
  </div>
  

<?php endwhile; 

echo "</div>";?>







<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
