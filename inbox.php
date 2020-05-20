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
     <script type="text/javascript">
      function ajax(){

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
          if(req.readyState == 4 && req.status == 200){
            document.getElementById('centerbar').innerHTML =  req.responseText;
          }
        }
        req.open('GET','chat.php',true);
        req.send();
      }
      setInterval(function(){ajax()},1000);
    </script>

</head>
<body onload="ajax()">
	




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

