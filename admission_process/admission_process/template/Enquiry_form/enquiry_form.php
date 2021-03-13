<?php
include("enquiry_header.php");
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
    <link rel="stylesheet" type="text/css" href="enquiry_form_style.php"/>
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
                    <div class="main-block"> 
                        <h1>Registration Form</h1>
                        <form method="POST" action="enquiry_form_connect.php">
                            <label>Enter Your Full Name:</label><br>
                            <input class="f1" type="text" name="fname" placeholder="Your Name.."><br>
                            <label>Email-Id:</label><br>
                            <input class="f1" type="email" name="email" placeholder="Enter Your official Email-Id"><br><br>
                            <label>Contact Number:</label><br>
                            <input class="f1" type="tel" name="phone" placeholder="Contact Number.."><br><br>

                            <label>In Which Field you are Interested ?:</label><br>
                            <select name="courses" class="f1">
                                <option value="B.TECH">B.Tech UG </option>
                                <option value="M.TECH">M.TECH</option>
                                <option value="BCA">BCA</option>
                                <option value="MCA">MCA</option>
                                <option value="BCS/MSC">BSC/MSC</option>
                            </select><br><br>
                            <button type="submit">REGISTER</button>
                        </form>
                    </div>
                </div>
</div>

<?php
include("enquiry_footer.php");
?>

<!--
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="enquiry_form_style.php"/>
    </head>
    <body>
    <div class="main-block"> 
        <h1>Registration Form</h1>
        <form method="POST" action="enquiry_form_connect.php">
            <label>Enter Your Full Name:</label><br>
            <input class="f1" type="text" name="fname" placeholder="Your Name.."><br>
            <label>Email-Id:</label><br>
            <input class="f1" type="email" name="email" placeholder="Enter Your official Email-Id"><br><br>
            <label>Contact Number:</label><br>
            <input class="f1" type="tel" name="phone" placeholder="Contact Number.."><br><br>

            <label>In Which Field you are Interested ?:</label><br>
            <select name="courses" class="f1">
                <option value="B.TECH">B.Tech UG </option>
                <option value="M.TECH">M.TECH</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="BCS/MSC">BSC/MSC</option>
            </select><br><br>
            <button type="submit">REGISTER</button>
      </form>
    </div>
    </body>
</html>
-->

