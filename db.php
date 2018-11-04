<?php

$localhost="localhost";
$user="id7732225_sahid786cse";
$database="id7732225_abcd";
$password="123456";

$con=mysqli_connect($localhost,$user,$password,$database);

if($con==True)
{
 
}
else
{
	echo "Connection Problem";
	exit();
}
?>