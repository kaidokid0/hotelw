<?php
session_start();
include('config/dbcon.php'); //  no need to include this file because of the include database is connected on this sapge



if(!isset($_SESSION['auth'])) // this function is  not allow the user enter this files unless the user is login in admin
{
	header("Location: ../index.php");
	exit(0);
}
else
{
	if($_SESSION['auth_role'] != "Admin") // only admin can allow open the admin system 
	{
		$_SESSION['red'] = "only Authorize can use this pages";
		header("Location: ../index.php");
		exit(0);
	}
}


?>