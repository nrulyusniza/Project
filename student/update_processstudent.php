<?php
include 'connstudent.php';

$studentid = $_GET['studentid'];
$update = "update student set stud_name='$_POST[studname]', 
stud_nophone='$_POST[studnophone]', stud_email='$_POST[studemail]', 
stud_password='$_POST[studpassword]', stud_regdate='$_POST[studregdate]' 
where stud_id=$studentid";

if(!mysqli_query($conn, $update)) {
    die ('Error: '.mysqli_error($conn));
}

$result = mysqli_query($conn, "select * from student where stud_id=$studentid");
$row = mysqli_fetch_array($result);
echo "Student ID: $row[0]<br>";
echo "Student name: $row[1]<br>";
echo "Phone number: $row[2]<br>";
echo "Email: $row[3]<br>";
echo "Password: $row[4]<br>";
echo "Registration date: $row[5]<br>";
echo "<a href=display_tablestudent.php>Back to table</a>";

mysqli_free_result($result);
mysqli_close($conn);
?>