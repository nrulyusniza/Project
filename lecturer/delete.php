<?php
include 'conn.php';

$lecturerid = $_GET['lecturerid'];
$delete = "delete from lecturer where lect_id=$lecturerid";

if(!mysqli_query($conn, $delete)) {
    die ('Error: '.mysqli_error($conn));
}

echo "Successfully deleted.<br>";
echo "<a href=display_table.php>Back to table</a";

mysqli_close($conn);
?>