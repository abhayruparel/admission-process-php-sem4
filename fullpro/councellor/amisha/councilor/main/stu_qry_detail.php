<?php
include("header.php");
?>

<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
<div class="white-box">






<?php

$stu_id = $_GET["stu_id"];
// echo $stu_id;
$qes_stu_qry="Select * from student_query where stu_id='$stu_id' and flag = '0';";
$qry_stu_qry=$conn->query($qes_stu_qry);
$res_stu_qry=$qry_stu_qry->fetch_assoc();
$stu_qry = $res_stu_qry["msg"];


$qes_stu_data="Select * from admission_data where stu_id='$stu_id';";
$qry_stu_data=$conn->query($qes_stu_data);
$res_stu_data=$qry_stu_data->fetch_assoc();
$stu_name = $res_stu_data["stu_fname"]." ".$res_stu_data["stu_lname"];


?>



<!-- <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing"> -->
                                    
                                    <div class="media m-b-30 p-t-20 b-t">
                                       
                                        <!-- <hr> -->
                                        <a class="pull-left" href="#"> <img class="media-object thumb-sm img-circle" src="../assets/images/users/pawandeep.jpg" alt=""> </a>
                                        <!-- <div class="media-body"> <span class="media-meta pull-right">07:23 AM</span> -->
                                            <h4 class="text-danger m-0"><?php echo $stu_name;?></h4>
                                             </div>
                                    </div>
                                    <p><?php echo $stu_qry;?></p>
                                    
                                <!-- </div> -->




</div>
</div>
</div>
</div>
</div>
</div>


<?php
include("footer.php");
?>