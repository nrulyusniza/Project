<?php
include 'conncourse.php';

$courseid = $_GET['courseid'];
$delete = "delete from course where stud_id=$courseid";

if(!mysqli_query($conn, $delete)) {
    die ('Error: '.mysqli_error($conn));
}

echo "Successfully deleted.<br>";
echo "<a href=display_tablecourse.php>Back to table</a";

mysqli_close($conn);
?>