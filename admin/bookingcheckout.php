<?php
include('authentication.php');
include('includes/header.php');

?>


<div class="container-fluid  px-4">
        <h1 class="mt-4">Booking Check Out Table</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Booking Check In DataTable</li>
        </ol>
        <?php include('messagefunction_green.php');  ?> 
		<?php include('messagefunction_red.php');  ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Booking Check In DataTable
                    </div>
                    <div class="card-body">
                    	
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
									<th>Booking ID</th>
									<th>Booking by Account ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Room Type</th>
									<th>Price</th>
									<th>Days Stay in Hotel</th>
									<th>Room Number</th>
									<th>Check in By</th>
									<th class="bg-warning">Check In At</th>
									<th>Checkout By</th>
									<th class="bg-success">Date of Check Out</th>
									<th>Bill</th>
									<th>Payment</th>>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Booking ID</th>
									<th>Booking by Account ID</th>
									<th>Name</th>
									<th>Status</th>
									<th>Room Type</th>
									<th>Price</th>
									<th>Days Stay in Hotel</th>
									<th>Room Number</th>
									<th>Check in By</th>
									<th class="bg-warning">Check In At</th>
									<th>Checkout By</th>
									<th class="bg-success">Date of Check Out</th>
									<th>Bill</th>
									<th>Payment</th>>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
								$query = "SELECT * FROM booking";
								$query = "SELECT * FROM booking WHERE status LIKE 'Check Out'";
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach ($query_run as $row) 
									{
										?>

                            <tr>
                                <td><?= $row['id']; ?></td>
								<td><?= $row['booking_by']; ?></td>
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
	                            <td><?= $row['days']; ?></td>
	                            <td><?= $row['checkout_room']; ?></td>
	                            <td><?= $row['by_checkin']; ?></td>
	                            <td class="bg-warning"><?= $row['checkin_date']; ?></td>
	                            <td><?= $row['checkout_by']; ?></td>
	                            <td class="bg-success"><?= $row['date_checkout']; ?></td>
								<td><?= $row['bill']; ?></td>
								<td><?= $row['payment']; ?></td>

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