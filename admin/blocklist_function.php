<?php
include('authentication.php');


// update
if (isset($_POST['ublock_btn'])) 
{
	$user_id = $_POST['user_id'];
	$role_as = $_POST['role_as'];
	$edit_by = $_POST['edit_by'];
	$edit_at = $_POST['edit_at'];

	$query = "UPDATE users SET role_as='$role_as', edit_by='$edit_by', edit_at='$edit_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Unblock Successfully';
		header('Location: blocklist.php');
	}
}

?>