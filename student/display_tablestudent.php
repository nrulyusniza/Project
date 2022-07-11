<?php
include 'connstudent.php';

$display = "<table border='1'>
<tr>
<th>Student ID</th>
<th>Student Name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Action</th>
</tr>";

$result = mysqli_query($conn, "select * from student");
while($row = mysqli_fetch_array($result)){
    $display .= "<tr><td>$row[0]</td>";
    $display .= "<td><a href=detailsstudent.php?studentid=$row[0]>$row[1]</a></td>";
    $display .= "<td>$row[2]</td>";
    $display .= "<td>$row[3]</td>";
    $display .= "<td><a href=updatestudent.php?studentid=$row[0]>Update</a>";
    $display .= "&nbsp;<a href=deletestudent.php?studentid=$row[0]>Delete</a></td>";
    $display .= "</tr>";
}
$display .= "</table>";
echo $display;
mysqli_free_result($result);
mysqli_close($conn);
?>