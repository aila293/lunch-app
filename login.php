<?php


if(isset($_POST['name'])) {
	session_start();
	 $_SESSION['name'] = $_POST['name'];
	header('Location: http://pikapeeta.webfactional.com/index.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title> Lunch | Login </title>
</head>


<body>

 <form method="POST">
Name:<br>
<input type="text" name="name">
<br>
Password:<br>
<input type="text" name="password">
<br>
<input type="submit" value="Submit">
</form> 


</body>
</html>
