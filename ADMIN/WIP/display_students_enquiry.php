<?php
$con=mysqli_connect("localhost","root","","admission_process");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM enquiry_data");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>mail</th>
<th>Contact number</th>
<th>Interested Field</th>
</tr>"; 

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['mail'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['interested_field'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>