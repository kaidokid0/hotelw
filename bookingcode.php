<?php
session_start(); // to start the function of message to show the message
include('admin/config/dbcon.php'); // to display the data or content inside header
 

 if(isset($_POST['oneroom_btn']))
 {
 	//$fname <- this is new variable and mysqli_real_escape_string($con, $_POST['fname']); the fname is the name of button in input
 	$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
 	$booking_by = mysqli_real_escape_string($con, $_POST['booking_by']);
 	$status = mysqli_real_escape_string($con, $_POST['status']);
 	$set_booking = mysqli_real_escape_string($con, $_POST['set_booking']);
 	$price = mysqli_real_escape_string($con, $_POST['price']);



 	//Check Email
	$checkemail = "SELECT set_booking FROM booking WHERE set_booking='$set_booking'";
 	$checkemail_run = mysqli_query($con, $checkemail);

	if (mysqli_num_rows($checkemail_run) > 0) 
	{
		// Already Email Exists
		$_SESSION['red'] = "Date of Booking is not Available";
		header("Location: bookingoneroom.php");
		exit(0);

	}
	else
	{

		// to send data in database
		$user_query = "INSERT INTO booking (fullname,booking_by,status,set_booking,price) VALUES ('$fullname','$booking_by','$status','$set_booking','$price')";
		$user_query_run = mysqli_query($con, $user_query);

		if($user_query_run){

			$_SESSION['green'] = "Booking Successfully, Please Show Your Booking Data. just go to Booking and Show to Admin, Thank You";
			header("Location: offer.php");
			exit(0);

		}else{

			$_SESSION['red'] = "Something Went Wrong";
			header("Location: offer.php");
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