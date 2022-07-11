<?php
include 'conn.php';

$lecturerid = $_GET['lecturerid'];
$result = mysqli_query($conn, "select * from lecturer where lect_id=$lecturerid");

$row = mysqli_fetch_array($result);
echo "lecturer ID: $row[0]<br>";
echo "lecturer name: $row[1]<br>";
echo "Phone number: $row[2]<br>";
echo "Gender: $row[3]<br>";
echo "Email: $row[4]<br>";
echo "Password: $row[5]<br>";
echo "Registration date: $row[6]<br>";

mysqli_free_result($result);
mysqli_close($conn);
?>