<?php

    include("header.php");




    
    ?>





<div id="page-wrapper">
    <div class="container-fluid">
                


<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3>Student Section</h3>
                            <p class="text-muted m-b-20">
                            Your students are as below</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>StudentFirstName</th>
                                            <th>StudentEmail</th>
                                            <th>StudentMSG</th>
                                            <th>Status</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$counselor_id=$_SESSION["couns_id"];//
$qry="select * from counsellor_alloted where couns_id='$counselor_id';";
$c_fire=$conn->query($qry);
while($res=$c_fire->fetch_assoc())
{
    $stu_id = $res["stu_id"];
    $qry1="select * from admission_data where stu_id='$stu_id';";
    $c_fire1=$conn->query($qry1);
    
while($res1=$c_fire1->fetch_assoc())
{

    $stu_id=$res1["stu_id"];
     $qry2="select * from student_query where stu_id='$stu_id';";
     $c_fire2=$conn->query($qry2);
     $res2=$c_fire2->fetch_assoc()




                                        ?>
                                        <tr>
                                          <td><?php echo $res2['stu_fname'];?></td>
                                           <td><?php echo $res2['stu_mail'];?></td>
                                           <td><?php echo $res2['msg'];?></td>
                                           <?php
                                                 }

                                             }
                                           ?>
                                           
                                        </tr>
                                           
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>





    </div>
</div>


<?php
    include("footer.php");
?>