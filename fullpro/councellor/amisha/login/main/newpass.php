<?php
include("../../db.php");

session_start();

?>
<!DOCTYPE html>
<html>


<!-- Mirrored from wrappixel.com/demos/admin-templates/maple-admin/main/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 04:53:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Maple Admin - is a responsive bootstrap admin template</title>
    <!-- Bootstrap CSS -->
    <link href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shiv and Respond.js IE8 support -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal m-t-20" method="post">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Enter New Password</h3>
                            <!-- <p class="text-muted">Enter your Email and instructions will be sent to you! </p> -->
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="pass" required="" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="repass" required="" placeholder="Re-Password">
                        </div>
                    </div>


                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" name="btn" type="submit">Reset</button>
                        </div>
                    </div>


<?php


 

$pass="";
$repass="";
$email="";

if(isset($_POST["btn"]))
{

    $pass=$_POST["pass"];
    $repass=$_POST["repass"];
    $email=$_SESSION["email"];

if($pass == $repass)
{
    $pass = $pass;

    

// check email from table


$c="Select * from counsellor_master where couns_mail='$email'";


$cresult=$conn->query($c);
$ccnt=mysqli_num_rows($cresult);






        if($ccnt==1)
        {
            $table="counsellor_master";
            $qry="update $table set couns_pass='$pass' where couns_mail='$email'";
            $fire=$conn->query($qry);
            // echo "<script>alert('Your Password Sucessfully Updated');</script>";
            header("location:login.php");
        }       
        else
        {
            echo "<script>alert('Email is Wrong');</script>";       
        }
    

                                
}
else
{
    echo "<script>alert('Password and Re-Password is wrong');</script>";
    $pass = "";
}



}









?>








                </form>
            </div>
            <footer class="footer text-center">
               </footer>
        </div>
    </section>
    <!-- jQuery -->
    <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/maple-admin/main/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 04:53:24 GMT -->
</html>