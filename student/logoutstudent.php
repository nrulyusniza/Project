<?php
session_start();
unset($_SESSION["stud_id"]);
unset($_SESSION["stud_name"]);
header("Location:loginstudent.php");
?>