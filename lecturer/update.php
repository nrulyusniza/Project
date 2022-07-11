<?php
include 'conn.php';

$lecturerid = $_GET['lecturerid'];
$result = mysqli_query($conn, "select * from lecturer where lect_id=$lecturerid");

$row = mysqli_fetch_array($result);
echo "<form action=update_process.php?lecturerid=$row[0] method=post>";
echo "Lecturer ID: <input type=text name=lecturerid value=$row[0] readonly><br>";
echo "Lecturer name: <input type=text name=lecturername value=$row[1]><br>";
echo "Phone Number: <input type=text name=lecturerphonenumber value=$row[2]><br>";
echo "Gender: <input type=text name=lecturergender value=$row[3]><br>";
echo "Email: <input type=text name=lectureremail value=$row[4]><br>";
echo "Password: <input type=text name=lecturerpassword value=$row[5]><br>";
echo "Registration date: <input type=text name=reg_date value=$row[6]><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>