<?php
include("header.php");
?>



<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12 col-sm-6">
<div class="white-box">
<h3>Student Query</h3>
<div class="message-center">







<?php

	$qes_all="Select * from counsellor_alloted where couns_id='$counselor_id';";
	$qry_all=$conn->query($qes_all);
	while($res_all=$qry_all->fetch_assoc())
	{
		$stu_id = $res_all["stu_id"];

		$qes_stu_qry="Select * from student_query where stu_id='$stu_id' and flag = '0';";
		$qry_stu_qry=$conn->query($qes_stu_qry);
		$res_stu_qry=$qry_stu_qry->fetch_assoc();
		$stu_qry = $res_stu_qry["msg"];


		$qes_stu_data="Select * from admission_data where stu_id='$stu_id';";
		$qry_stu_data=$conn->query($qes_stu_data);
		$res_stu_data=$qry_stu_data->fetch_assoc();
		$stu_name = $res_stu_data["stu_fname"]." ".$res_stu_data["stu_lname"];

?>


				<a href="<?php echo 'stu_qry_detail.php?stu_id='.$stu_id;?>" class="unread">

				    <div class="user-img">
				    	<img class="img-circle" alt="user" src="../assets/images/users/pawandeep.jpg">
				    	<span class="profile-status online pull-right"></span>
				    </div>
				    
				    <div class="mail-contnet">
				        <h5><?php echo $stu_name;?></h5>
				        <span class="mail-desc"><?php echo $stu_qry;?></span>
				        <!-- <span class="time">9:30 AM</span> -->
				    </div>

				</a>



<?php
	}

?>




</div>
</div>
</div>
</div>
</div>
</div>
</div>








<?php
include("footer.php");
?>