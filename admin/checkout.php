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
    <h4 class="mt-4">Booking Check In Table</h4>
     <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="bookingcheckin.php">Booking Check In DataTable</a></li>
        <li class="breadcrumb-item active">Insert in Check In Booking</li>
    </ol>
    <?php include('messagefunction_green.php');  ?> 
    <?php include('messagefunction_red.php');  ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Insert into Check Out Booking</h4>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id'])) 
                        {
                            $user_id = $_GET['id'];  
                            $users = "SELECT * FROM booking where id='$user_id'";
                            $users_run = mysqli_query($con, $users);

                            if(mysqli_num_rows($users_run) > 0)
                            {
                                foreach ($users_run as $user ) 
                                {

                                ?> <!-- close php -->

                    <form  action="bookingcode.php" method="POST">
                        <div class="row">

                            <!-- hidden booking id -->
                            <input name="user_id" type="hidden" value="<?=$user['id'] ?>">

                            <!-- hidden Booking by -->
                            
                                <input required type="hidden" name="booking_by" value="<?=$user['booking_by'] ?>">
                            

                            <!-- show Full Name -->
                            <div class="col-md-6 mb-3">
                                <label>Full Name</label>
                                <input readonly="readonly" class="form-control" type="text" value="<?=$user['fullname'] ?>" name="fullname">
                            </div>

                            <!-- hidden Status -->
                            
                                <input required readonly="readonly" type="hidden" name="status" value="Check Out">
                            

                            <!-- show room type -->
                            <div class="col-md-6 mb-3"> 
                                <label  for="" >Room Type</label>
                                <select readonly="readonly"  name="price" class="form-control">
                                    <option value="">--Select Role--</option>

                                    <option value="2000" <?= $user['price'] == '2000' ? 'selected':'' ?> >Single Bed</option> 

                                    <option value="3000" <?= $user['price'] == '3000' ? 'selected':'' ?> >Double Bed</option>

                                    <option value="4000" <?= $user['price'] == '4000' ? 'selected':'' ?> >Triple Bed</option>
                                </select>
                            </div> 

                            <!-- hide price -->

                            <!-- show days -->
                            <div class="col-md-6 mb-3">
                                <label>Days</label>
                                <input readonly="readonly" required  class="form-control" type="text" value="<?=$user['days'] ?>" name="days">
                            </div>

                            <!-- show room_no -->
                            <div  class="col-md-6 mb-3">
                                <label>Room</label>
                                <input readonly="readonly" required class="form-control" type="text" value="<?=$user['room_no'] ?>" name="checkout_room">
                            </div>

                            <!-- Hidden  Check In By ID account -->
                           
                                <input type="hidden" name="by_checkin" value="<?= $_SESSION['auth_user']['user_id'] ?>">
                            

                            <!-- hidden Check In at -->
                           
                                <input name="checkin_date" type="hidden" value="<?php echo date("Y-m-d h:i:sa", $today); ?>">
                            
                            <!-- Hidden  Check out By ID account -->
                            
                                <input type="hidden" name="checkout_by" value="<?= $_SESSION['auth_user']['user_id'] ?>">
                            

                            <!-- hidden Check out at -->
                            
                                <input name="date_checkout" type="hidden" value="<?php echo date("Y-m-d h:i:sa", $today); ?>">
                            

                            <!-- bill -->

                            <!-- null the room Status -->
                            
                                <input required readonly="readonly" type="hidden" name="payment" value="Paid">
                            

                            <!-- show room_no -->
                            
                                <input readonly="readonly" required class="form-control" type="hidden" value="null" name="room_no">
                            
                             
                            <div class="d-grid gap-2 d-md-block">
                                <td><a href="bookingcheckin.php" class="btn btn-danger">Back</a></td>
                                 <button type="submit" name="checkout_btn" class="btn btn-warning">Check out</button>
                            </div>

                        </div>
                    </form>

                    <!-- connected of query on the top -->
                    <!-- open php -->
                                <?php

                                }
                                
                            }
                            else
                            {
                                ?> <!-- close php -->
                                <h4>No Record Found</h4>

                                <!-- open php -->
                                <?php
                            }
                        }
                        

                    ?> <!-- close php -->

                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>