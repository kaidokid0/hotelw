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
    <h4 class="mt-4">Missed Table</h4>
     <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">User Dashboard</a></li>
        <li class="breadcrumb-item"><a href="bookingmissed.php">Missed DataTable</a></li>
        <li class="breadcrumb-item active">Missed Booking</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Uncancel Booking</h4>
                </div>
                <div class="card-body">

                    <!-- open php -->
                    <!-- the query and the botton is the end of query  -->
                    <!-- the $_GET['id'] is base on the link like this. edit_admin.php?id=1 the id=1 is the id to use   -->
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
                    
                    <form action="bookingcode.php" method="POST">
                        <div class="row">

                            <input name="user_id" type="hidden" value="<?=$user['id'] ?>">
                           

                             <!-- show Full Name -->
                            <div class="col-md-6 mb-3">
                                <label>Full Name</label>
                                <input readonly="readonly" class="form-control" type="text" value="<?=$user['fullname'] ?>" name="fullname">
                            </div>

                            <!-- booking by  -->
                            <div class="col-md-6 mb-3">
                                <label>Booking ID</label>
                                <input readonly="readonly" class="form-control" type="text" name="booking_by" value="<?=$user['booking_by'] ?>">
                            </div>

                            <!--  status  -->
                             <input required readonly="readonly" type="hidden" name="status" value="Pending">

                            <!--  Missed by ID account -->
                            <div class="col-md-6 mb-3">
                                <input name="cancel_by" required type="hidden" value="<?= $_SESSION['auth_user']['user_id'] ?>">
                            </div>

                            <!-- missed_at -->
                            <div class="col-md-6 mb-3">
                                <input name="cancel_at" type="hidden" value="<?php echo date("Y-m-d h:i:sa", $today); ?>">
                            </div>

                            <!--  Button to insert to database/ create account -->
                            <div class="d-grid gap-2 d-md-block">
                                <td><a href="bookingmissed.php" class="btn btn-danger">Back</a></td>
                                <button type="submit" name="uncancelbooking_btn" class="btn btn-secondary">Cancel</button>
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