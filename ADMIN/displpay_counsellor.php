<?php
$con=mysqli_connect("localhost","root","","admission_process");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM counsellor_master");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>Contact number</th>
<th>Mail id</th>
</tr>"; 

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['couns_fname'] . "</td>";
echo "<td>" . $row['couns_lname'] . "</td>";
echo "<td>" . $row['couns_gender'] . "</td>";
echo "<td>" . $row['c   ouns_contact_no'] . "</td>";
echo "<td>" . $row['couns_mail'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>