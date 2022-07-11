<?php
define('db_student','root');
define('db_password','');
define('db_host','localhost');
define('db_name','collegeregistrationsystem');

$conn = mysqli_connect (db_host, db_student, db_password, db_name);
$result = mysqli_query($conn, "select * from student");
while($row = mysqli_fetch_array($result)){
    foreach($row as $key=>$value){
        echo "$key = $value <br>\n";
    }
    echo "<br>";
}
mysqli_free_result($result);
mysqli_close($conn);
?>