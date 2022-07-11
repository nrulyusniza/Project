<?php
include 'connstudent.php';

$studentid = $_GET['studentid'];
$result = mysqli_query($conn, "select * from student where stud_id=$studentid");

$row = mysqli_fetch_array($result);
echo "<form action=update_processstudent.php?studentid=$row[0] method=post>";
echo "Student ID: <input type=text name=studentid value=$row[0] readonly><br>";
echo "Student name: <input type=text name=studname value=$row[1]><br>";
echo "Phone Number: <input type=text name=studnophone value=$row[2]><br>";
echo "Email: <input type=text name=studemail value=$row[3]><br>";
echo "Password: <input type=text name=studpassword value=$row[4]><br>";
echo "Registration date: <input type=text name=studregdate value=$row[5]><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>