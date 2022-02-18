<?php
include('authentication.php');

// add admin
if(isset($_POST['addnewcheckin_btn']))
 {
    //$fname <- this is new variable and mysqli_real_escape_string($con, $_POST['fname']); the fname is the name of button in input
    $booking_by = mysqli_real_escape_string($con, $_POST['booking_by']);
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $price = $_POST['price'];
    $days = mysqli_real_escape_string($con, $_POST['days']);
    $room_no = mysqli_real_escape_string($con, $_POST['room_no']);
    $by_checkin = mysqli_real_escape_string($con, $_POST['by_checkin']);
    $checkin_date = mysqli_real_escape_string($con, $_POST['checkin_date']);
    $bill = $_POST['bill'];
    $setdate_checkout = mysqli_real_escape_string($con, $_POST['setdate_checkout']);

   //Check Email
    $checkemail = "SELECT room_no FROM booking WHERE room_no='$room_no'";
    $checkemail_run = mysqli_query($con, $checkemail);

    if (mysqli_num_rows($checkemail_run) > 0) 
    {
        // Already Email Exists
        $_SESSION['red'] = "room is already occupied";
        header("Location: bookingcheckin.php");
        exit(0);

    }
    else
    {
        $bill = $days * $price;
        $user_query = "INSERT INTO booking (booking_by,fullname,status,price,days,room_no,by_checkin,checkin_date,bill,setdate_checkout) VALUES ('$booking_by','$fullname','$status','$price','$days','$room_no','$by_checkin','$checkin_date','$bill','$setdate_checkout')";
        $user_query_run = mysqli_query($con, $user_query);

        if($user_query_run){

            $_SESSION['green'] = "Add new check in Successfully";
            header("Location: bookingcheckin.php");
            exit(0);

        }else{

            $_SESSION['red'] = "Something Went Wrong";
            header("Location: bookingcheckin.php");
            exit(0);

        }


    }

 }





?>
