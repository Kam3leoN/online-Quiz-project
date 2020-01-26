	<?php
 
session_start();
if(!isset($_SESSION['Username'])){
header('location:login.php');
}


	?>
	<!DOCTYPE html>
<html>
<head>
<title> </tilte>
</head>
<body>
<h2> welcome <?php echo $_SESSION['Username']; ?> </h2>
 <a href="logout.php"> LOGOUT </a>
</body>
</html>

