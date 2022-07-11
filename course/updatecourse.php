<?php
include 'conncourse.php';

$courseid = $_GET['courseid'];
$result = mysqli_query($conn, "select * from course where course_id=$courseid");

$row = mysqli_fetch_array($result);
echo "<form action=update_processcourse.php?courseid=$row[0] method=post>";
echo "Course ID: <input type=text name=courseid value=$row[0]><br>";
echo "Course name: <input type=text name=coursename value=$row[1]><br>";
echo "Registration date: <input type=text name=courseregdate value=$row[2]><br>";
echo "<input type=submit value=Update>";
mysqli_free_result($result);
mysqli_close($conn);
?>