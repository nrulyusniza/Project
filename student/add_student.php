<?php
include 'connstudent.php';

$sql="insert into student (stud_name, stud_nophone,
stud_email, stud_password, stud_regdate) values
('$_POST[studname]', '$_POST[studnophone]', '$_POST[studemail]', '$_POST[studpassword]', now())";
echo $sql;
if(!mysqli_query($conn, $sql)){
    die('Error: '.mysqli_error($conn));
}
echo "1 record of student successfully added...<br>";
echo "<a href=display_tablestudent.php>Display all</a>";

?>