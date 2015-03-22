<?php
session_start();
$con = mysqli_connect("localhost","lunchadmin","l8ncH","lunch_tester");
$name=$_SESSION['name'];

$query = "SELECT status FROM users WHERE name='$name'";
$me = mysqli_query($con, $query)->fetch_assoc();
$my_status = $me[status];

  if (isset($_GET['switch'])) {
    	changeStatus($my_status, $con, $name);	
	header("Location: /index.php");
  }

function changeStatus($my_status, $con, $name){
	if ($my_status) $qry = "UPDATE users SET status='0' WHERE name='$name'";
	else $qry = "UPDATE users SET status='1' WHERE name='$name'";
	mysqli_query($con, $qry);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title> Lunch </title>
</head>
<body>

<div id="you"> You <a href='index.php?switch=1'> 
	<?php 
		$src = $my_status ? "tri_green.png" : "tri_red.png";
		echo "<img src=$src class='status'>"; 
	?> 
</a> </div>

<div id="friends"> 
<?php 
$query = "SELECT name, status FROM users WHERE name<>'$name'";
$result = mysqli_query($con, $query);
$num_friends = $result->num_rows;

for($i=0; $i < $num_friends; $i++){
	$row = $result->fetch_assoc();
	$name = $row[name];
	$status = $row[status];
	
	echo $name;

	$src = $status ? "tri_green.png" : "tri_red.png";
	echo "<img src=$src class='status'> <br>";
}
?>

<br>
 </div>


</body>
</html>
