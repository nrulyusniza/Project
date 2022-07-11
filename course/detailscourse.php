<?php
include 'conncourse.php';

$courseid = $_GET['courseid'];
$result = mysqli_query($conn, "select * from course where course_id=$courseid");

$row = mysqli_fetch_array($result);
echo "Course ID: $row[0]<br>";
echo "Course name: $row[1]<br>";


mysqli_free_result($result);
mysqli_close($conn);
?>