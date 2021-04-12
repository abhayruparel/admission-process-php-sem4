<?php
try {
    $server = "localhost";
    $user = "root";
    $pw = "";
    $con = new PDO('mysql:host=localhost;dbname=admission_process', $user, $pw);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
// $fname1 = "satviknaik19@gnu.ac.in";
$uploaddir = 'uploaded/'; 
$fname = $_POST['fname'];
$img1 = $uploaddir . time() . '1_'. basename($_FILES['packagephoto_name']['name']); 
$img2 = $uploaddir . time() . '1_'. basename($_FILES['packagephoto2_name']['name']); 
if ((move_uploaded_file($_FILES['packagephoto_name']['tmp_name'], $img1)) && (move_uploaded_file($_FILES['packagephoto2_name']['tmp_name'], $img2))) {
	$postwithimg= $con->query("INSERT INTO uploaded_docs(name,doc1,doc2) VALUES ('$fname', '$img1', '$img2')");
	if ($postwithimg) {
		echo "Image Successfully submitted";
	}else{
		echo 'Not added in database.';
	}
}else{
echo "Image not uploadded";
}
?>