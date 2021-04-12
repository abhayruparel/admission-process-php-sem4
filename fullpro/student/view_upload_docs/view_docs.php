<?php
include("view_docs_header.php");
include("..".DIRECTORY_SEPARATOR."upload_docs".DIRECTORY_SEPARATOR."upload_docs_connect.php");
header('Content-type: text/plain');
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
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "admission_process";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $email = $fname;
                    $sql = "SELECT * FROM uploaded_docs WHERE name='$email'";
                    $result = $conn->query($sql);
                    $image1 = '../upload_docs/'.$row["doc1"];
                    $image2 = '../upload_docs/'.$row["doc2"];
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Img1" . $row["doc1"]. " - Img2" . $row["doc2"]. "<br>";
                        $image1 = '../upload_docs/'.$row["doc1"];
                        $image2 = '../upload_docs/'.$row["doc2"];
                ?>
                        <table>
                            <tr>
                                <th>10th MarkSheet</th>
                                <th>12th MarkSheet</th>
                            </tr>
                            <tr>
                                <td><img src="<?php echo $image1; ?>" alt="" width="400" height="400"/></td>
                                <td><img src="<?php echo $image2; ?>" alt="" width="400" height="400"/></td>
                            </tr>
                        </table>
                        
                        
                <?php
                    }
            
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
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
include("view_docs_footer.php");
?>