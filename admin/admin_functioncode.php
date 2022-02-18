<?php
include('authentication.php');


//delete admin
if(isset($_POST['admindelete_btn']))
{
	$user_id = $_POST['admindelete_btn'];

	$query = "DELETE FROM users WHERE id='$user_id' ";
	$query_run = mysqli_query($con, $query);

	if($query_run)
	{

		$_SESSION['green'] = "Admin Deleted Successfully";
 		header("Location: admininfo.php");
 		exit(0);

	}
	else
	{

		$_SESSION['red'] = "Something Went Wrong";
 		header("Location: admininfo.php");
 		exit(0);

	}
}





// add admin
if(isset($_POST['addadmin_btn']))
 {
 	//$fname <- this is new variable and mysqli_real_escape_string($con, $_POST['fname']); the fname is the name of button in input
 	$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
 	$contact = mysqli_real_escape_string($con, $_POST['contact']);
 	$gender = mysqli_real_escape_string($con, $_POST['gender']);
 	$role_as = mysqli_real_escape_string($con, $_POST['role_as']);
 	$email = mysqli_real_escape_string($con, $_POST['email']);
 	$password = mysqli_real_escape_string($con, $_POST['password']);
 	$create_by = mysqli_real_escape_string($con, $_POST['create_by']);

 	$checkemail = "SELECT email FROM users WHERE email='$email'";
 	$checkemail_run = mysqli_query($con, $checkemail);

 	if (mysqli_num_rows($checkemail_run) > 0) 
	{
		// Already Email Exists
		$_SESSION['red'] = "Already Email Exists";
		header("Location: add_admin.php");
		exit(0);

	}
	else
	{

		// to send data in database
		$user_query = "INSERT INTO users (fullname,contact,gender,role_as,email,password,create_by) VALUES ('$fullname','$contact','$gender','$role_as','$email','$password','$create_by')";
		$user_query_run = mysqli_query($con, $user_query);

		if($user_query_run){

			$_SESSION['green'] = "Add Account Successfully";
	 		header("Location: admininfo.php");
	 		exit(0);

		}else{

			$_SESSION['red'] = "Something Went Wrong";
	 		header("Location: add_admin.php");
	 		exit(0);

		}
	}

 }









// update
if (isset($_POST['updateadmin_btn'])) 
{
	$user_id = $_POST['user_id'];
	$fullname = $_POST['fullname'];
	$contact = $_POST['contact'];
	$role_as = $_POST['role_as'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$edit_by = $_POST['edit_by'];
	$edit_at = $_POST['edit_at'];

	$query = "UPDATE users SET fullname='$fullname', contact='$contact', role_as='$role_as', email='$email', password='$password', edit_by='$edit_by', edit_at='$edit_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Update Successfully';
		header('Location: admininfo.php');
	}
}
?>

