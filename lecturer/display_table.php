<?php
include 'conn.php';

$display = "<table border='1'>
<tr>
<th>Lecturer ID</th>
<th>Lecturer Name</th>
<th>Phone Number</th>
<th>Gender</th>
<th>Email</th>
<th>Action</th>
</tr>";

$result = mysqli_query($conn, "select * from lecturer");
while($row = mysqli_fetch_array($result)){
    $display .= "<tr><td>$row[0]</td>";
    $display .= "<td><a href=details.php?lecturerid=$row[0]>$row[1]</a></td>";
    $display .= "<td>$row[2]</td>";
    $display .= "<td>$row[3]</td>";
    $display .= "<td>$row[4]</td>";
    $display .= "<td><a href=update.php?lecturerid=$row[0]>Update</a>";
    $display .= "&nbsp;<a href=delete.php?lecturerid=$row[0]>Delete</a></td>";
    $display .= "</tr>";
}
$display .= "</table>";
echo $display;
mysqli_free_result($result);
mysqli_close($conn);
?>