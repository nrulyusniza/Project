<?php
include 'connstudent.php';

$studentid = $_GET['studentid'];
$result = mysqli_query($conn, "select * from student where stud_id=$studentid");

$row = mysqli_fetch_array($result);
echo "Student ID: $row[0]<br>";
echo "Student name: $row[1]<br>";
echo "Phone number: $row[2]<br>";
echo "Email: $row[3]<br>";
echo "Password: $row[4]<br>";
echo "Registration date: $row[5]<br>";

mysqli_free_result($result);
mysqli_close($conn);
?>