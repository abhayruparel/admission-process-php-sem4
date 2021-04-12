<?php
$mysqli = new mysqli("localhost", "root", "", "admission_process");

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$name = $_POST['fname'];
$mail = $_POST['email'];
$stu_query = $_POST['stu_query'];

$sql = "INSERT INTO student_query ( name, mail, msg ) 
VALUES ( '$name', '$mail', '$stu_query' )";

if ($mysqli->query($sql) === TRUE) {
        echo "Your query has been successfully submitted";
        /*echo '<script type="text/javascript">
                window.onload = function () { alert("Registered Successfully !!"); }
                </script>';*/
        //echo "<script>alert('Enrolled Successfully !!! \n Your temporary id is: $last_id')</script>";
    } else {
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
} 

$stmt->close();
$mysqli->close();
?>