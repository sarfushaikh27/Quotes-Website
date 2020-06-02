<?php
include 'connect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$quote = $_POST['quote'];
$sql = "insert into data values('$name','$email','$quote')";
if(!mysqli_query($con,$sql))
{
	echo "Error";
}
else
{
	echo "inserted";
}


?>