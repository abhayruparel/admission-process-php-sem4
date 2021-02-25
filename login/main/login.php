<?php

    include("../../db.php");
    session_start();

?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Maple Admin - is a responsive bootstrap admin template</title>
    <!-- Bootstrap CSS -->
    <link href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal m-t-20" method="post">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Login</h3>
                            <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" placeholder="Mail" name="mail" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" placeholder="Password" name="pass" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-md-5 col-xs-12">
                            <div class="checkbox checkbox-primary">
                            </div>
                        </div>

                        <div class="col-md-7 col-xs-12 m-t-5 text-right">
                            <a href="forgot.php" class="text-dark">
                                <i class="fa fa-lock m-r-5"></i> Forgot your password?
                            </a>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" name="btn" type="submit">Log In</button>
                        </div>
                    </div>
                    
                </form>


<?php


if (isset($_POST["btn"]))
{
    $email = $_POST["mail"];
    $pass = $_POST["pass"];



    $qry="select * from counselor_master where counselor_mail = '$email' and counselor_pass = '$pass';";
    echo $qry;

    $a_fire=$conn->query($qry);
    $a_cnt=mysqli_num_rows($a_fire);



    if ($a_cnt == 1)
    {
        $a_res=$a_fire->fetch_assoc();
        $_SESSION["counselor_id"] = $a_res["counselor_id"];
        $_SESSION["login"] = 1;

        echo ("<script>location.href='../../councilor/main/index.php'</script>");
        
    }

    else
    {
        echo "mail or password is worng";
    }



}




?>






            </div>
            <footer class="footer text-center">
                
                <!-- 2017 © Maple Admin. -->
            </footer>
        </div>
    </section>
    <!-- jQuery -->
    <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/maple-admin/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 04:51:59 GMT -->
</html>
