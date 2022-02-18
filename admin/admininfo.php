<?php
include('authentication.php');
include('includes/header.php');

?>

<div class="container-fluid  px-4">
        <h1 class="mt-4">Admin Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Administration Information DataTable</li>
        </ol>
        <?php include('messagefunction_green.php');  ?> 
		<?php include('messagefunction_red.php');  ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                       Administration Information DataTable
                    </div>
                    <div class="card-body">
                    	
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Account ID</th>
									<th>Name</th>
									<th>Contact Number</th>
									<th>Gender</th>
									<th>Account Type</th>
									<th>Email Address</th>
									<th>Date & Time Created</th>
									<th>Created By By ID Account Number:</th>
									<th>Last Edited By ID Account Number:</th>
									<th>Last Date & Time Edited</th>
									<th>Edit</th>
									<th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Account ID</th>
									<th>Name</th>
									<th>Contact Number</th>
									<th>Gender</th>
									<th>Account Type</th>
									<th>Email Address</th>
									<th>Date & Time Created</th>
									<th>Created By By ID Account Number:</th>
									<th>Last Edited By ID Account Number:</th>
									<th>Last Date & Time Edited</th>
									<th>Edit</th>
									<th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
								$query = "SELECT * FROM users";
								$query = "SELECT * FROM users WHERE role_as LIKE 'Admin'";
								
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach ($query_run as $row) 
									{
										?>

                            <tr>
                                <td><?= $row['id']; ?></td>
								<td><?= $row['fullname']; ?></td>
								<td><?= $row['contact']; ?></td>
								<td><?= $row['gender']; ?></td>
								<td><?= $row['role_as']; ?></td>
								<td><?= $row['email']; ?></td>
								<td><?= $row['created_at']; ?></td>
								<td><?= $row['create_by']; ?></td>
								<td><?= $row['edit_by']; ?></td>
								<td><?= $row['edit_at']; ?></td>

								<td>
									<a href="admin_update.php?id=<?= $row['id'];?>" class="btn btn-primary">Edit</a>
								</td>

								<td>
									<form action="admin_functioncode.php" method="post">
									<button name="admindelete_btn" value="<?= $row['id']; ?>" type="submit" class="btn btn-danger">Delete</button>
									</form>
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
				     <td><a href="add_admin.php" class="btn btn-success">Add Data</a></td>
				</div>

    </div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>