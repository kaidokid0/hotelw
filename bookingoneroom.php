<?php
session_start();
include('admin/config/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
	<div class="container-sm">
		<div class="row justify-content-center">
			<div class="col-md-5">
				
				<?php include('messagefunction_red.php');  ?>
				<?php include('messagefunction_green.php');  ?>

				<div class="card">
					<div class="card-header">
						<h4>Booking Form in Single Bed</h4>
					</div>

					<div class="card-body">

						<form  action="bookingcode.php" method="POST">

							<!--  Full Name -->
							<div class="form-group mb-3">
								<label>Full Name</label>
								<input readonly="readonly" class="form-control" type="text" value="<?= $_SESSION['auth_user']['user_name'] ?>" name="fullname">
							</div>

							<!-- Booking by -->
							<div class="form-group mb-3">
								<input required type="hidden" name="booking_by" value="<?= $_SESSION['auth_user']['user_id'] ?>">
							</div>

							<!-- Status -->
							<div class="form-group mb-3">
								<input required type="hidden" name="status" value="Pending">
							</div>

							<!-- Set Date Booking  -->
							<div class="form-group mb-3">
								<label>Date of Reservation</label>
								<input required class="form-control" type="date" placeholder="Enter Full Name" name="set_booking">
							</div>

							<!-- Price -->
							<div class="form-group mb-3">
								<input required type="hidden" name="price" value="2000">
							</div>

							<!--  Button to insert to database/ create account -->
							<div class="d-grid gap-2 d-md-block">
                                <td><a href="offer.php" class="btn btn-danger">Back</a></td>
                                <button type="submit" name="oneroom_btn" class="btn btn-primary">Book</button>
                            </div>
						</form>

						<div class="card-header">
					<h4>List of Booking Pending</h4>
				</div>

				<div class="card-body">
					<table id="datatablesSimple" class="table-danger">
                    <thead class="thead-danger">
                        <tr>
							<th>Date List is not available to Booking</th>
                            
                        </tr>
                    </thead>
                    <tfoot>

                    	<?php
								$query = "SELECT * FROM booking";
								$query = "SELECT * FROM booking WHERE status LIKE 'Pending'";
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach ($query_run as $row) 
									{
										?>
                        <tr>
								<td><?= $row['set_booking']; ?></td>
                        </tr>

                        <?php

                                }
                            }
                            else
                            {
                            ?>

                                <tr>
                                    <td colspan="6">No Record Found</td>
                                </tr>

                            <?php
                            }

                            ?>
                    </tfoot>
                    <tbody>
                
                    </tbody>
                </table>
				</div>
				
			</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
include('includes/footer.php');
include('includes/scripts.php'); // this scripts is to able auto responsive this page and to able function the  navbar-toggler-icon
?>
