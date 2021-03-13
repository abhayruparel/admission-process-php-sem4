
  
<?php
include("header.php");
?>
<head>
    <link href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/bower_components/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="enroll_form_style.php"/>
</head>

<br>

<div id="page-wrapper">
            <div class="container-fluid">
                <!--
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Welcome Students</h4>
                        <ol class="breadcrumb">
                        
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        
                        </ol>
                    </div>
                     /.col-lg-12 
                </div>
                -->
                <!-- /.row -->
                <div class="row">

<!-- PHP CODE INTEGRATION display_counsellor_alloted.php-->
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
echo "<td>" . $row['couns_contact_no'] . "</td>";
echo "<td>" . $row['couns_mail'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<!-- end of php code-->
                </div>
</div>

<?php
include("footer.php");
?>