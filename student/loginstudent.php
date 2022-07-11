<?php
session_start();
$message="";
if(count($_POST)>0) {
	include 'connstudent.php';
	$result = mysqli_query($conn,"SELECT * FROM student 
	WHERE stud_id='" . $_POST["stud_id"] . "' and 
	stud_password = '". $_POST["stud_password"]."'");
	$row = mysqli_fetch_array($result);
	if(is_array($row)) {
		$_SESSION["stud_id"] = $row['stud_id'];
		$_SESSION["stud_name"] = $row['stud_name'];
	} else {
		$message = "Invalid Username or Password!";
	}
}
if(isset($_SESSION["stud_id"])) {
	header("Location:indexstudent.php");
}
?>
<html>
<body>
<form method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Student Login Details</h3>
Student ID:<br>
<input type="text" name="stud_id"><br>
Password:<br>
<input type="password" name="stud_password"><br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</form>
</body>
</html>