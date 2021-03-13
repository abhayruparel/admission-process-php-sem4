<?php
include("admission_header.php");
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
                    <div class="enroll_form">
                        <h1>Admission Form</h1>
                        <form action="enroll_form_connect.php" method="post">
                        <table class="center">
                            <tr>
                                <td><p>First Name:</p></td>
                                <td><input type="text" name="fname" placeholder="Enter Your First Name"/></td>
                            </tr>

                            <tr>
                                <td><p>Last Name:</p></td>
                                <td><input type="text" name="lname" placeholder="Enter Your Last Name"/></td>
                            </tr>

                            <tr>
                                <td><p>Contact Number:</p></td>
                                <td><input type="text" name="contact" placeholder="Enter Your Contact No."/></td>
                            </tr>

                            <tr>
                                <td><p>E-Mail ID:</p></td>
                                <td><input type="mail" name="mail" placeholder="Enter Your Valid E-Mail ID"/></td>
                            </tr>

                            <tr>
                                <td>Gender:</td>
                                <td>
                                    <input type="radio" name="gender" value="M">Male
                                    <input type="radio" name="gender" value="F">Female
                                </td>
                            </tr>

                            <tr>
                                <td><p>D.O.B:</p></td>
                                <td><input type="date" name="dob"/></td>
                            </tr>

                            <tr>
                                <td><p>Guardian Name:</p></td>
                                <td><input type="text" name="gname" placeholder="Enter Your Guardian Name"/></td>
                            </tr>

                            <tr>
                                <td><p>Guardian Contact Number:</p></td>
                                <td><input type="text" name="gcontact" placeholder="Enter Your Guardian Valid contact no."/></td>
                            </tr>

                            <tr>
                                <td><p>Address:</p></td>
                                <td><textarea name="add" placeholder="Enter Your Valid Address"></textarea></td>
                            </tr>

                            <tr>
                                <td><p>Country:</p></td>
                                <td><input type="text" name="country"/></td>
                            </tr>

                            <tr>
                                <td><p>State:</p></td>
                                <td><input type="text" name="state"/></td>
                            </tr>

                            <tr>
                                <td><p>City:</p></td>
                                <td><input type="text" name="city"/></td>
                            </tr>

                            <tr>
                                <td><p>Pincode:</p></td>
                                <td><input type="text" name="pin"/></td>
                            </tr>

                            <tr>
                                <td><p>Select Your Main Degree Field:</p></td>
                                <td>
                                    <select name="deg" id="deg_field">
                                    <option value="B.Tech">B.Tech</option>
                                    <option value="BCA">BCA</option>
                                    <option value="B.Arch">B.Arch</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><p>Select Your Course:</p></td>
                                <td>
                                    <select name="course" id="course_field">
                                    <option value="BDA">BDA</option>
                                    <option value="CBA">CBA</option>
                                    <option value="CS">CS</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><button type="submit">ENROLL</button></td>
                            </tr>
                        </table>
                        </form>
                    </div>  
                </div>
</div>

<?php
include("admission_footer.php");
?>



<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="enroll_form_style.php"/>
    <title>Admission Form</title>
</head>
<body>
    <div class="enroll_form">
        <h1>Admission Form</h1>
        <form action="enroll_form_connect.php" method="post">
        <table class="center">
            <tr>
                <td><p>First Name:</p></td>
                <td><input type="text" name="fname" placeholder="Enter Your First Name"/></td>
            </tr>

            <tr>
                <td><p>Last Name:</p></td>
                <td><input type="text" name="lname" placeholder="Enter Your Last Name"/></td>
            </tr>

            <tr>
                <td><p>Contact Number:</p></td>
                <td><input type="text" name="contact" placeholder="Enter Your Contact No."/></td>
            </tr>

            <tr>
                <td><p>E-Mail ID:</p></td>
                <td><input type="mail" name="mail" placeholder="Enter Your Valid E-Mail ID"/></td>
            </tr>

            <tr>
                <td><p>Gender:</p></td>
                <td><p>Male</p></td>
                <td><input type="radio" id="male" name="gender" value="M"></td>
                <td><p>Female</p></td>
                <td><input type="radio" id="female" name="gender" value="F"></td>
            </tr>

            <tr>
                <td><p>D.O.B:</p></td>
                <td><input type="date" name="dob"/></td>
            </tr>

            <tr>
                <td><p>Guardian Name:</p></td>
                <td><input type="text" name="gname" placeholder="Enter Your Guardian Name"/></td>
            </tr>

            <tr>
                <td><p>Guardian Contact Number:</p></td>
                <td><input type="text" name="gcontact" placeholder="Enter Your Guardian Valid contact no."/></td>
            </tr>

            <tr>
                <td><p>Address:</p></td>
                <td><textarea name="add" placeholder="Enter Your Valid Address"></textarea></td>
            </tr>

            <tr>
                <td><p>Country:</p></td>
                <td><input type="text" name="country"/></td>
            </tr>

            <tr>
                <td><p>State:</p></td>
                <td><input type="text" name="state"/></td>
            </tr>

            <tr>
                <td><p>City:</p></td>
                <td><input type="text" name="city"/></td>
            </tr>

            <tr>
                <td><p>Pincode:</p></td>
                <td><input type="text" name="pin"/></td>
            </tr>

            <tr>
                <td><p>Select Your Main Degree Field:</p></td>
                <td>
                    <select name="deg" id="deg_field">
                    <option value="B.Tech">B.Tech</option>
                    <option value="BCA">BCA</option>
                    <option value="B.Arch">B.Arch</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><p>Select Your Course:</p></td>
                <td>
                    <select name="course" id="course_field">
                    <option value="BDA">BDA</option>
                    <option value="CBA">CBA</option>
                    <option value="CS">CS</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2"><button type="submit">ENROLL</button></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>
-->