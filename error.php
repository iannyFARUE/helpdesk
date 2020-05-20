<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>error</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<form>
		<p>
			<?php
			$message = $_SESSION['message'];

			if(isset($_SESSION['message']) AND !empty($_SESSION['message'])){
				echo '<script>
				swal({
				  title: "Error!",
				  text: "",
				  icon: "error",
				  button: "OK!",
				});</script>';
			}
			
			?>
		</p>
		
	</form>

</body>
</html>