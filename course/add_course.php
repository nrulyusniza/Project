<?php
include 'conncourse.php';

$sql="insert into course (course_id, course_name, course_regdate) values
('$_POST[courseid]','$_POST[coursename]', now())";
echo $sql;
if(!mysqli_query($conn, $sql)){
    die('Error: '.mysqli_error($conn));
}
echo "1 record of course successfully added...<br>";
echo "<a href=display_tablecourse.php>Display all</a>";

?>