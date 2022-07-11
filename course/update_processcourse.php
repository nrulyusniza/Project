<?php
include 'conncourse.php';

$courseid = $_GET['courseid'];
$update = "update course set course_id='$_POST[courseid]', course_name='$_POST[coursename]', 
course_regdate='$_POST[courseregdate]' 
where course_id=$courseid";

if(!mysqli_query($conn, $update)) {
    die ('Error: '.mysqli_error($conn));
}

$result = mysqli_query($conn, "select * from course where course_id=$courseid");
$row = mysqli_fetch_array($result);
echo "Course ID: $row[0]<br>";
echo "Course name: $row[1]<br>";
echo "Registration date: $row[2]<br>";
echo "<a href=display_tablecourse.php>Back to table</a>";

mysqli_free_result($result);
mysqli_close($conn);
?>