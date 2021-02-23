<?php
$con=mysqli_connect("localhost","root","","admission_process");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM counsellor_alloted");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>couns_alloted_id</th>
<th>stu_id</th>
<th>couns_id</th>
<th>couns_alloted_date</th>
<th>couns_alloted_time</th>
</tr>"; 

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['couns_alloted_id'] . "</td>";
echo "<td>" . $row['stu_id'] . "</td>";
echo "<td>" . $row['couns_id'] . "</td>";
echo "<td>" . $row['couns_alloted_date'] . "</td>";
echo "<td>" . $row['couns_alloted_time'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>