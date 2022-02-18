<?php
include('authentication.php');

//delete admin
if(isset($_POST['deletebooking_btn']))
{
	$user_id = $_POST['deletebooking_btn'];

	$query = "DELETE FROM booking WHERE id='$user_id' ";
	$query_run = mysqli_query($con, $query);

	if($query_run)
	{

		$_SESSION['green'] = "Booking Deleted Successfully";
 		header("Location: bookingcheckin.php");
 		exit(0);

	}
	else
	{

		$_SESSION['red'] = "Something Went Wrong";
 		header("Location: bookingcheckin.php");
 		exit(0);

	}
}

?>