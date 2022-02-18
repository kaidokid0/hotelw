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
	<h4 class="mt-4">Booking Pending Table</h4>
	 <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">User Dashboard</a></li>
        <li class="breadcrumb-item"><a href="bookingpending.php">Booking Pending DataTable</a></li>
        <li class="breadcrumb-item active">Insert in Check In Booking</li>
    </ol>
    <div class="row">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-header">
    				<h4>Insert in Check In Booking</h4>
                     <p> Single Bed = prices ₱2.000 pesos <br>
                         Double Bed = prices ₱3.000 pesos <br>
                         Triple Bed = prices ₱4.000 pesos
                    </p>

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

                             <!-- show Set Date Check out  -->
                            <div class="col-md-6 mb-3">
                                <label>Date of Check Out</label>
                                <input required class="form-control" type="datetime-local"  value="<?=$user['setdate_checkout'] ?>" name="setdate_checkout">
                            </div>

                            <!-- hidden booking id -->
    						<input name="user_id" type="hidden" value="<?=$user['id'] ?>">

                            <!-- hidden Booking by -->
                            
                                <input required type="hidden" name="booking_by" value="<?=$user['booking_by'] ?>">
                            

                            <!-- show days -->
                            <div class="col-md-6 mb-3">
                                <label>Days</label>
                                <input  class="form-control" type="text" value="<?=$user['days'] ?>" name="days">
                            </div>
                            

                            <!-- hidden Status -->
                            
                                <input required readonly="readonly" type="hidden" name="status" value="Check In">
                            

                            <!-- show room type -->
                            <div class="col-md-6 mb-3"> 
                                <label for="" >Room Type</label>
                                <select  name="price" class="form-control">
                                    <option value="">--Select Role--</option>

                                    <option value="2000" <?= $user['price'] == '2000' ? 'selected':'' ?> >Single Bed</option> 

                                    <option value="3000" <?= $user['price'] == '3000' ? 'selected':'' ?> >Double Bed</option>

                                    <option value="4000" <?= $user['price'] == '4000' ? 'selected':'' ?> >Triple Bed</option>
                                </select>
                            </div> 

                            <!-- hide price -->

                            <!-- show Full Name -->
                            <div class="col-md-6 mb-3">
                                <label>Full Name</label>
                                <input readonly="readonly" class="form-control" type="text" value="<?=$user['fullname'] ?>" name="fullname">
                            </div>

                            <!-- show room_no -->
                            <div class="col-md-6 mb-3"> 
                                <label for="" >Room Number</label>
                                <select  name="room_no" class="form-control">

                                    <option value="">--Select Room--</option>

                                    <option value="1" <?= $user['room_no'] == '1' ? 'selected':'' ?> >1</option> 

                                    <option value="2" <?= $user['room_no'] == '2' ? 'selected':'' ?> >2</option> 

                                    <option value="3" <?= $user['room_no'] == '3' ? 'selected':'' ?> >3</option> 

                                    <option value="4" <?= $user['room_no'] == '4' ? 'selected':'' ?> >4</option> 

                                    <option value="5" <?= $user['room_no'] == '5' ? 'selected':'' ?> >5</option> 

                                    <option value="6" <?= $user['room_no'] == '6' ? 'selected':'' ?> >6</option> 

                                    <option value="7" <?= $user['room_no'] == '7' ? 'selected':'' ?> >7</option> 

                                    <option value="8" <?= $user['room_no'] == '8' ? 'selected':'' ?> >8</option> 

                                    <option value="9" <?= $user['room_no'] == '9' ? 'selected':'' ?> >9</option> 

                                    <option value="10" <?= $user['room_no'] == '10' ? 'selected':'' ?> >10</option> 

                                </select>
                            </div>




                            <!-- Hidden  Check In By ID account -->
                            
                                <input type="hidden" name="by_checkin" value="<?= $_SESSION['auth_user']['user_id'] ?>">
                           

                            <!-- hidden Check In at -->
                           
                                <input name="checkin_date" type="hidden" value="<?php echo date("Y-m-d h:i:sa", $today); ?>">
                            

                            <!-- bill -->


                            <!--  Button to insert to database/ create account -->
                            <div class="d-grid gap-2 d-md-block">
                                <td><a href="bookingpending.php" class="btn btn-danger">Back</a></td>
                                <button type="submit" name="checkin_btn" class="btn btn-warning">Check in</button>
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