<?php
include 'conn.php';

$lecturerid = $_GET['lecturerid'];
$update = "update lecturer set lect_name='$_POST[lecturername]', 
lect_nophone='$_POST[lecturerphonenumber]', lect_nophone='$_POST[lecturerphonenumber]', 
lect_email='$_POST[lectureremail]', 
lect_password='$_POST[lecturerpassword]', lect_regdate='$_POST[reg_date]' 
where lect_id=$lecturerid";

if(!mysqli_query($conn, $update)) {
    die ('Error: '.mysqli_error($conn));
}

$result = mysqli_query($conn, "select * from lecturer where lect_id=$lecturerid");
$row = mysqli_fetch_array($result);
echo "Lecturer ID: $row[0]<br>";
echo "Lecturer name: $row[1]<br>";
echo "Phone number: $row[2]<br>";
echo "Gender: $row[3]<br>";
echo "Email: $row[4]<br>";
echo "Password: $row[5]<br>";
echo "Registration date: $row[6]<br>";
echo "<a href=display_table.php>Back to table</a>";

mysqli_free_result($result);
mysqli_close($conn);
?>