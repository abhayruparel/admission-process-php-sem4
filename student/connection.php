<?php
$name = $_POST['fname'];
$number = $_POST['phone'];
$mail = $_POST['email'];
$int_field = $_POST['courses'];
$password = $_POST['pass'];

$con = new mysqli('localhost','root','root','experiment','3308');
if($con->connect_error) {
    die('Connection Failed '.$con->connect_error);
}
else {
    //Connection Establised !!!!!
    $st = $con->prepare("insert into student_enquiry_details(stu_name,stu_number,stu_mail,stu_interest_field,stu_pass) VALUES(?,?,?,?,?)");
    $st->bind_param("sssss",$name,$number,$mail,$int_field,$password);
    $st->execute();
    if($st) {
        echo "Registerd Successfully !!"; 
        $last_id = $con->insert_id;
        $stu_id = "STU_".$last_id;      //STU_1,STU_2
        echo "\n\nYour ID is: ".$stu_id;
        $update = "update student_enquiry_details SET `stu_id`='".$stu_id."'where `id`='".$last_id."'";
        $st=$con->prepare($update);
        $st->execute();
    }   
    else {
        echo " ".mysqli_error($con);
    }
    $st->close();
    $con->close();
}
?>