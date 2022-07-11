<?php
include 'connstudent.php';

$studentid = $_GET['studentid'];
$delete = "delete from student where stud_id=$studentid";

if(!mysqli_query($conn, $delete)) {
    die ('Error: '.mysqli_error($conn));
}

echo "Successfully deleted.<br>";
echo "<a href=display_tablestudent.php>Back to table</a";

mysqli_close($conn);
?>