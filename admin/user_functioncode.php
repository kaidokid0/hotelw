<?php
include('authentication.php');


//delete admin
if(isset($_POST['userdelete_btn']))
{
	$user_id = $_POST['userdelete_btn'];

	$query = "DELETE FROM users WHERE id='$user_id' ";
	$query_run = mysqli_query($con, $query);

	if($query_run)
	{

		$_SESSION['green'] = "Admin Deleted Successfully";
 		header("Location: userinfo.php");
 		exit(0);

	}
	else
	{

		$_SESSION['red'] = "Something Went Wrong";
 		header("Location: userinfo.php");
 		exit(0);

	}
}





// update
if (isset($_POST['updateuser_btn'])) 
{
	$user_id = $_POST['user_id'];
	$fullname = $_POST['fullname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$edit_by = $_POST['edit_by'];
	$edit_at = $_POST['edit_at'];

	$query = "UPDATE users SET fullname='$fullname', contact='$contact', email='$email', password='$password', edit_by='$edit_by', edit_at='$edit_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Update Successfully';
		header('Location: userinfo.php');
	}
}
?>

