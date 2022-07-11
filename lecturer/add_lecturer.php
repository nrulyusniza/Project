<?php
include 'conn.php';

$sql="insert into lecturer (lect_name, lect_nophone, lect_gender,
lect_email, lect_password, lect_regdate) values
('$_POST[lecturername]','$_POST[lecturerphonenumber]', '$_POST[lecturergender]',
'$_POST[lectureremail]','$_POST[lecturerpass]',
now())";
echo $sql;
if(!mysqli_query($conn, $sql)){
    die('Error: '.mysqli_error($conn));
}
echo "1 record successfully added...<br>";
echo "<a href=display_table.php>Display all</a>";

?>