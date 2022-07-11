<?php
include 'conncourse.php';

$display = "<table border='1'>
<tr>
<th>Course ID</th>
<th>Course Name</th>
<th>Action</th>
</tr>";

$result = mysqli_query($conn, "select * from course");
while($row = mysqli_fetch_array($result)){
    $display .= "<tr><td>$row[0]</td>";
    $display .= "<td><a href=detailscourse.php?courseid=$row[0]>$row[1]</a></td>";
    $display .= "<td><a href=updatecourse.php?courseid=$row[0]>Update</a>";
    $display .= "&nbsp;<a href=deletecourse.php?courseid=$row[0]>Delete</a></td>";
    $display .= "</tr>";
}
$display .= "</table>";
echo $display;
mysqli_free_result($result);
mysqli_close($conn);
?>