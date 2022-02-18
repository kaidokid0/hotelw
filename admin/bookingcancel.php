<?php
include('authentication.php');
include('includes/header.php');

?>


<div class="container-fluid  px-4">
        <h1 class="mt-4">Cancel Table</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Cancel DataTable</li>
        </ol>
        <?php include('messagefunction_green.php');  ?> 
		<?php include('messagefunction_red.php');  ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                       	Cancel DataTable
                    </div>
                    <div class="card-body">
                    	
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Booking by Account ID</th>
									<th>Booking ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Room Type</th>
									<th>Price</th>
									<th class="bg-primary">Date of Booking</th>
									<th class="bg-warning">Date of Reservation Room</th>
									<th>Cancel By ID Account Number:</th>
									<th>Date & Time Cancel</th>
									<th>Block</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Booking by Account ID</th>
									<th>Booking ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Room Type</th>
									<th>Price</th>
									<th class="bg-primary">Date of Booking</th>
									<th class="bg-warning">Date of Reservation Room</th>
									<th>Cancel By ID Account Number:</th>
                                    <th>Date & Time Cancel</th>
									<th>Block</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
								$query = "SELECT * FROM booking";
								$query = "SELECT * FROM booking WHERE status LIKE 'Cancel'";
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach ($query_run as $row) 
									{
										?>

                            <tr>
                                <td><?= $row['booking_by']; ?></td>
								<td><?= $row['id']; ?></td>
								<td><?= $row['fullname']; ?></td>
								<td><?= $row['status']; ?></td>
								<td>
                                            <?php
                                            if($row['price'] == '2000')
                                            {
                                                echo "Single Bed";
                                            }
                                            elseif($row['price'] == '3000')
                                            {
                                                echo "Double Bed";
                                            }
                                            elseif($row['price'] == '4000')
                                            {
                                                echo "Triple Bed";
                                            }  
                                            ?>
                                        </td>
								<td><?= $row['price']; ?></td>
								<td class="bg-primary"><?= $row['date_booking']; ?></td>
								<td class="bg-warning"><?= $row['set_booking']; ?></td>
								<td><?= $row['cancel_by']; ?></td>
								<td><?= $row['cancel_at']; ?></td>

								<!-- Block -->
                                <!-- miss -->
                                <td>
                                    <a href="uncancelbooking.php?id=<?= $row['id'];?>" class="btn btn-secondary text-white">Uncancel</a>
                                </td>


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
                                
		                    </tbody>
		                </table>

		            </div>
		        </div>

		        <div class="d-grid gap-2 d-md-block">
		        	<td><a href="index.php" class="btn btn-danger">Back</a></td>
				</div>

    </div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>