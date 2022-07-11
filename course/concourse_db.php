<?php
define('db_course','root');
define('db_password','');
define('db_host','localhost');
define('db_name','collegeregistrationsystem');

$conn = mysqli_connect (db_host, db_course, db_password, db_name);

if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>