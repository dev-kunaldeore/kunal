<?php
$servername = "localhost";
$username = "root"; // by default username is root
$password = "";//by default no password for user root so it is a empty
$dbname = "democonnection";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	echo "Connected";
}
else
{
	echo "Not Connected";
}
?>