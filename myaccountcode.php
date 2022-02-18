<?php

session_start();
include('admin/config/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');

// this is time to input the this use this echo date("Y-m-d h:i:sa", $today);  
date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
echo "<br>";echo "<br>";
echo "<br>";



//update account
 // update
  if(isset($_POST['updatemyaccount_btn']))
{
	$user_id = $_POST['user_id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];
	$edit_by = $_POST['edit_by'];
	$role_as = $_POST['role_as'];
	$edit_at = $_POST['edit_at'];

	$query = "UPDATE users SET fullname='$fullname', email='$email', contact='$contact', password='$password', password='$password', edit_by='$edit_by', role_as='$role_as', edit_at='$edit_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Update Account Successfully';
		header('Location: index.php');
	}
}

?>