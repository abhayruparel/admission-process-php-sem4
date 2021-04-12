<?php
include("upload_header.php");
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
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="enroll_form_style.php"/>

    <!--Form CSS Start-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <!--Form CSS End-->
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
                    <div class="wrapper wrapper--w790">
                        <div class="card card-5">
                            <div class="card-heading">
                                <h2 class="title">Upload Documents</h2>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="msg"></div>
                                        <form action="../view_upload_docs/view_docs.php" method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="name">Email ID</div>
                                                <div class="value">
                                                    <div class="input-group">
                                                        <input id="fname" name="fname" class="input--style-5" type="email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="name">10th Report Card</div>
                                                <div class="value">
                                                    <div class="input-group">
                                                        <input id="img1" name="img1" class="input--style-5" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="name">12th Report Card</div>
                                                <div class="value">
                                                    <div class="input-group">
                                                        <input id="img2" name="img2" class="input--style-5" type="file">
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <button id="addimage" name="addimage" class="btn btn--radius-2 btn--blue" type="submit">UPLOAD</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div> 
                </div>
</div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
        <!-- Optional JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="upload_ajax.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
<?php
include("upload_footer.php");
?>