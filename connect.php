<?php
$host="localhost";
$user="root";
$pass="";
$db="quotes";

$con =  new mysqli($host,$user,$pass,$db);
if(!$con)
{
	echo "Not Connected to database";
}



?>