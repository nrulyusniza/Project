<?php session_start(); ?>
<html>
<head>
<title>Student Login</title>
</head>
<body>
<?php
if($_SESSION["stud_name"]) { ?>
    Hi <?php echo $_SESSION["stud_name"]; ?>.
    <a href="logoutstudent.php" title="Logout">Logout</a><br><br>
    <a href="get_infostudent.php" title="Add">Add new student</a><br>
    <a href="display_tablestudent.php" title="Display">Display all students</a><br>
    <?php
} else {
    header("Location: loginstudent.php");
}
?>
</body>
</html>