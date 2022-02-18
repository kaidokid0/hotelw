<?php
include('authentication.php');
include('includes/header.php');

?>

<div class="container-fluid  px-4">
        <h1 class="mt-4">Tables</h1>
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
									<th>Date Created</th>
									<th>Created By</th>
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
									<th>Date Created</th>
									<th>Created By</th>
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

								<td><a href="userinfo_edit.php?id=<?= $row['id'];?>" class="btn btn-success">Edit</a></td>

								<td><button type="button" class="btn btn-danger">Delete</button></td>

                                    </tr>

						        <!-- Modal -->
								<div class="modal fade" id="add_adminmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Add Admistration Account</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>

								      <form action="add_admin.php" method="POST">

									      <div class="modal-body">
									        
									        <!--  Full Name -->
											<div class="form-group">
												<label>Full Name</label>
												<input required class="form-control" type="text" placeholder="Enter Full Name" name="fullname">
											</div>

											<!--  Contact Number -->
											<div class="form-group">
												<label>Contact Number</label>
												<input required class="form-control" type="text" placeholder="Enter Contact Number" name="contact">
											</div>

											<!--  Gender -->
											<div class="form-group">
												<label>Gender:</label> <br>
												<input required type="radio" name="gender" value="Male"> Male
												<input required  type="radio" name="gender" value="Female"> Female
											</div>

											<!--  Role_As User -->
											<div class="form-group">
												<input required type="hidden" name="role_as" value="Admin">
											</div>

											<!--  Email -->
											<div class="form-group">
												<label>Email</label>
												<input required class="form-control" type="email" placeholder="Enter Email Address" name="email">
											</div>

											<!--  Password -->
											<div class="form-group">
												<label>Password</label>
												<input required class="form-control" type="password" placeholder="Enter Password" name="password" id="password">
											</div>

											<!--  Created_by -->
											<div class="form-group mb-3">
												<input required type="hidden" name="create_by" value="<?= $row['create_by']; ?>">
											</div>
											

											<!--  Function to Show Password -->
											<div class="form-group">
												<div class="form-check">
													<input onclick="myshowpass()" class="form-check-input" type="checkbox">
											        <label  class="form-check-label" for="showpassword">Show Password</label>
											    </div>
											</div>
									      </div>

									      <div class="modal-footer">

									      	<!--  button to crate account -->
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									        <button name="add_admin" type="button" class="btn btn-primary">Create Admin Account</button>

									      </div>

									    </form>
								    </div>
								  </div>
								</div>
 								<!-- Modal  -->

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

		        <div class="">
		        	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_adminmodal">Add Data</button>
		        </div>

    </div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>