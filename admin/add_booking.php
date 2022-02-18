<?php
include('authentication.php');
include('includes/header.php');
// this is time to input the this use this echo date("Y-m-d h:i:sa", $today);  
date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
echo "<br>";echo "<br>";
echo "<br>";
?>

<div class="container-sm px-4">
    <h4 class="mt-4">Booking Check in Table</h4>
     <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">User Dashboard</a></li>
        <li class="breadcrumb-item"><a href="bookingcheckin.php">Booking Check in DataTable</a></li>
        <li class="breadcrumb-item active">Add Check in Booking</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Check In Booking</h4>
                </div>
                <div class="card-body">

                        <form  action="add_bookingcode.php" method="POST">

                            <!-- Booking by -->
                                <input required type="hidden" name="booking_by" value="Walk-In">

                             <!--  Full Name -->
                           <div class="col-md-6 mb-3">
                                <label>Full Name</label>
                                <input required class="form-control" type="text" placeholder="Enter Name of Customer" name="fullname">
                            </div>

                            <!-- Status -->
                                <input required type="hidden" name="status" value="Check In">

                            <p class="h6 px-3"> Single Bed = prices ₱2.000 pesos <br>
                                Double Bed = prices ₱3.000 pesos <br>
                                Triple Bed = prices ₱4.000 pesos
                            </p>

                            <!-- show room type -->
                            <div class="col-md-6 mb-3"> 
                                <label for="" >Room Type</label>
                                <select  name="price" class="form-control">
                                    <option value="">--Select Role--</option>

                                    <option value="2000">Single Bed</option> 

                                    <option value="3000">Double Bed</option>

                                    <option value="4000">Triple Bed</option>
                                </select>
                            </div> 

                            <!-- show room_no -->
                            <div class="col-md-6 mb-3"> 
                                <label for="" >Room Number</label>
                                <select  name="room_no" class="form-control">

                                    <option value="">--Select Room--</option>

                                    <option value="1">1</option> 

                                    <option value="2">2</option> 

                                    <option value="3">3</option> 

                                    <option value="4">4</option> 

                                    <option value="5">5</option> 

                                    <option value="6">6</option> 

                                    <option value="7">7</option> 

                                    <option value="8">8</option> 

                                    <option value="9">9</option> 

                                    <option value="10">10</option> 

                                </select>
                            </div>

                                <!-- Hidden  Check In By ID account -->
                                <input type="hidden" name="by_checkin" value="<?= $_SESSION['auth_user']['user_id'] ?>">

                                <!-- hidden Check In at -->
                                <input name="checkin_date" type="hidden" value="<?php echo date("Y-m-d h:i:sa", $today); ?>">


                                <!-- hidden Check In at -->

                             <!-- Set Date Check Out  -->
                            <div class="col-md-6 mb-3">
                                <label>the Date of Check Out</label>
                                <input required class="form-control" type="datetime-local" name="setdate_checkout">
                            </div>

                            <!-- show days -->
                                <div class="col-md-6 mb-3">
                                    <label>Days</label>
                                    <input  class="form-control" type="text" placeholder="Input How many days" name="days">
                                </div>


                            <!--  Button to insert to database/ create account -->
                            <div class="col-md-6 mb-3">
                                <td><a href="bookingcheckin.php" class="btn btn-danger">Back</a></td>
                                <button type="submit" name="addnewcheckin_btn" class="btn btn-primary">Book</button>
                            </div>


                        </form> 

                    </div>
                
            </div>
        </div>
    </div>
</div>



<?php
include('includes/footer.php');
include('includes/scripts.php');
?>
