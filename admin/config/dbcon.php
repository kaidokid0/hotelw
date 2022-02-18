<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "hotelw";

$con = mysqli_connect("$host","$username","$password","$database"); // to connect to database

if(!$con)
{
	header("Location: ../errors/dberror.php");  // if the $con or querydata is not true or exist show the message to idenfity the database is not connected
	die();
}

?>