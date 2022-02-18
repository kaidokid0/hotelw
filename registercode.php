<?php
session_start(); // to start the function of message to show the message
include('admin/config/dbcon.php'); // to display the data or content inside header
 

 if(isset($_POST['register_btn']))
 {
 	//$fname <- this is new variable and mysqli_real_escape_string($con, $_POST['fname']); the fname is the name of button in input
 	$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
 	$contact = mysqli_real_escape_string($con, $_POST['contact']);
 	$gender = mysqli_real_escape_string($con, $_POST['gender']);
 	$role_as = mysqli_real_escape_string($con, $_POST['role_as']);
 	$email = mysqli_real_escape_string($con, $_POST['email']);
 	$password = mysqli_real_escape_string($con, $_POST['password']);
 	$create_by = mysqli_real_escape_string($con, $_POST['create_by']);

	//Check Email
	$checkemail = "SELECT email FROM users WHERE email='$email'";
 	$checkemail_run = mysqli_query($con, $checkemail);

	if (mysqli_num_rows($checkemail_run) > 0) 
	{
		// Already Email Exists
		$_SESSION['red'] = "Already Email Exists";
		header("Location: register.php");
		exit(0);

	}
	else
	{

		// to send data in database
		$user_query = "INSERT INTO users (fullname,contact,gender,role_as,email,password,create_by) VALUES ('$fullname','$contact','$gender','$role_as','$email','$password','$create_by')";
		$user_query_run = mysqli_query($con, $user_query);

		if($user_query_run){

			$_SESSION['green'] = "Register Successfully";
 		header("Location: login.php");
 		exit(0);

		}else{

			$_SESSION['red'] = "Something Went Wrong";
 		header("Location: register.php");
 		exit(0);

		}
	}

 }
 else
 {

 	header("Location: ../index.php");
 	exit(0); // if someone open this page outsite automatic back to register php
 }




?>