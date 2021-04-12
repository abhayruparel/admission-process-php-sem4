<?php
$mysqli = new mysqli("localhost", "root", "", "admission_process");

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$stu_id = "STU_";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$mail = $_POST['mail'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$gname = $_POST['gname'];
$gcontact = $_POST['gcontact'];
$add = $_POST['add'];
$country = $_POST['country'];
$State = $_POST['state'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$deg = $_POST['deg'];
$course = $_POST['course'];

$sql = "INSERT INTO admission_data ( stu_id, stu_fname, stu_lname, stu_contact_no, stu_mail, gender, dob, gur_name, gur_contact_no, address, country, state, city, pincode, main_stream_field, main_deg_field ) 
VALUES ( '$stu_id', '$fname', '$lname', '$contact', '$mail', '$gender', '$dob', '$gname', '$gcontact', '$add', '$country', '$State', '$city', '$pin', '$deg', '$course' )";

if ($mysqli->query($sql) === TRUE) {
    $last_id = $mysqli->insert_id;
    $s_id = "STU_".$last_id;
    $q2 = "UPDATE admission_data SET stu_id='".$s_id."' WHERE id='".$last_id."'";
    if ($mysqli->query($q2) === TRUE) {
        echo '<script type="text/javascript">
                window.onload = function () { alert("Enrolled Successfully !!! \n Your temporary id is '.$s_id.'"); }
                </script>';
        //echo "<script>alert('Enrolled Successfully !!! \n Your temporary id is: $last_id')</script>";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }  
} else {
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
} 

$stmt->close();
$mysqli->close();
?>