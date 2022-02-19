<?php
$server="localhost";
$username="root";
$password="";
$db="college";
$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
	//echo"congo!!";
}
else{
	echo 'Error';
}
?>
