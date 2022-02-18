<?php
include('authentication.php');

// update the pending dashboard
if (isset($_POST['editpending_btn'])) 
{
	$user_id = $_POST['user_id'];
	$set_booking = $_POST['set_booking'];
	$price = $_POST['price'];
	$editbooking_by = $_POST['editbooking_by'];
	$editbooking_at = $_POST['editbooking_at'];
	
	$query = "UPDATE booking SET set_booking='$set_booking', price='$price', editbooking_by='$editbooking_by', editbooking_at='$editbooking_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Update Successfully';
		header('Location: bookingpending.php');
	}
}


// pending to check in pending dashboard
if(isset($_POST['checkin_btn']))
 {
 	$user_id = $_POST['user_id'];
	$booking_by = $_POST['booking_by'];
	$fullname = $_POST['fullname'];
	$status = $_POST['status'];
	$price  = $_POST['price'];
	$days = $_POST['days'];
	$room_no = $_POST['room_no'];
	$by_checkin = $_POST['by_checkin'];
	$checkin_date = $_POST['checkin_date'];
	$bill = $_POST['bill'];
	$setdate_checkout = $_POST['setdate_checkout'];
 	

	//Check Email
	$checkemail = "SELECT room_no FROM booking WHERE room_no='$room_no'";
 	$checkemail_run = mysqli_query($con, $checkemail);

	if (mysqli_num_rows($checkemail_run) > 0) 
	{
		// Already Email Exists
		$_SESSION['red'] = "room is already occupied";
		header("Location: bookingpending.php");
		exit(0);

	}
	else
	{
		
		$bill = $days * $price;
		// to send data in database
		$query = "UPDATE booking SET booking_by='$booking_by', fullname='$fullname', status='$status', price='$price', days='$days', room_no='$room_no', by_checkin='$by_checkin', checkin_date='$checkin_date', bill='$bill', setdate_checkout='$setdate_checkout' WHERE id='$user_id' ";

			$query_run = mysqli_query($con, $query);

			if($query_run)
			{
				$_SESSION['green'] = 'Check In Successfully';
				header('Location: bookingpending.php');
			}
	}

 }



 // update the check in check in dashboard
if (isset($_POST['editcheckin_btn'])) 
{
	$user_id = $_POST['user_id'];
	$setdate_checkout = $_POST['setdate_checkout'];
	$days = $_POST['days'];
	$room_no = $_POST['room_no'];
	$price = $_POST['price'];
	$bill = $_POST['bill'];
	$editsetdatecheckout_by = $_POST['editsetdatecheckout_by'];
	$editsetdatecheckout_at = $_POST['editsetdatecheckout_at'];

	$bill = $days * $price;
	
	$query = "UPDATE booking SET setdate_checkout='$setdate_checkout', days='$days', room_no='$room_no', price='$price', bill='$bill' , editsetdatecheckout_by='$editsetdatecheckout_by' , editsetdatecheckout_at='$editsetdatecheckout_at'  WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Update Successfully';
		header('Location: bookingcheckin.php');
	}

	
}

//check in to check out in check in dashboard
if(isset($_POST['checkout_btn']))
 {
 	$user_id = $_POST['user_id'];
	$booking_by = $_POST['booking_by'];
	$fullname = $_POST['fullname'];
	$status = $_POST['status'];
	$price  = $_POST['price'];
	$days = $_POST['days'];
	$checkout_room = $_POST['checkout_room'];
	$by_checkin = $_POST['by_checkin'];
	$checkin_date = $_POST['checkin_date'];
	$checkout_by = $_POST['checkout_by'];
	$date_checkout = $_POST['date_checkout'];
	$bill = $_POST['bill'];
	$payment = $_POST['payment'];
	$room_no = $_POST['room_no'];
 	

	$bill = $days * $price;
	// to update data in database
	$query = "UPDATE booking SET booking_by='$booking_by', fullname='$fullname', status='$status', price='$price', days='$days', checkout_room='$checkout_room', by_checkin='$by_checkin', checkin_date='$checkin_date', checkout_by='$checkout_by', date_checkout='$date_checkout', bill='$bill', room_no='$room_no', payment='$payment' WHERE id='$user_id' ";

		$query_run = mysqli_query($con, $query);

		if($query_run)
		{
			$_SESSION['green'] = 'Check Out Successfully';
			$room_no = NULL;
			header('Location: bookingcheckin.php');
		}


	

 }


 //missed function in ppending dashboard
if (isset($_POST['missedbooking_btn'])) 
{
	$user_id = $_POST['user_id'];
	$booking_by = $_POST['booking_by'];
	$status = $_POST['status'];
	$missed_by = $_POST['missed_by'];
	$markmissed_at = $_POST['markmissed_at'];
	
	$query = "UPDATE booking SET booking_by='$booking_by', status='$status', missed_by='$missed_by', markmissed_at='$markmissed_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Missed Successfully';
		header('Location: bookingpending.php');
	}
}

//unmissed
if (isset($_POST['umissedbooking_btn'])) 
{
	$user_id = $_POST['user_id'];
	$booking_by = $_POST['booking_by'];
	$status = $_POST['status'];
	$missed_by = $_POST['missed_by'];
	$markmissed_at = $_POST['markmissed_at'];
	
	$query = "UPDATE booking SET booking_by='$booking_by', status='$status', missed_by='$missed_by', markmissed_at='$markmissed_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Unmissed Successfully';
		header('Location: bookingmissed.php');
	}
}

// cancel in pending dashboard
if (isset($_POST['cancelbooking_btn'])) 
{
	$user_id = $_POST['user_id'];
	$booking_by = $_POST['booking_by'];
	$status = $_POST['status'];
	$cancel_by = $_POST['cancel_by'];
	$cancel_at = $_POST['cancel_at'];
	
	$query = "UPDATE booking SET booking_by='$booking_by', status='$status', cancel_by='$cancel_by', cancel_at='$cancel_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Cancel Successfully';
		header('Location: bookingpending.php');
	}
}

// uncancel in cancel dashboard
if (isset($_POST['uncancelbooking_btn'])) 
{
	$user_id = $_POST['user_id'];
	$booking_by = $_POST['booking_by'];
	$status = $_POST['status'];
	$cancel_by = $_POST['cancel_by'];
	$cancel_at = $_POST['cancel_at'];
	
	$query = "UPDATE booking SET booking_by='$booking_by', status='$status', cancel_by='$cancel_by', cancel_at='$cancel_at' WHERE id='$user_id' ";

	$query_run = mysqli_query($con, $query);

	if($query_run)
	{
		$_SESSION['green'] = 'Uncancel Successfully';
		header('Location: bookingcancel.php');
	}
}

?>