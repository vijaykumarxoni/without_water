<?php


include("../include/dbcon.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "insert into contactus values (NULL, '$name','$email','$subject','$message')";
$query = mysqli_query($con,$sql);
if ($query){
	echo "success";

}
else {
	echo "sorry";
}



?>