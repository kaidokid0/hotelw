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
	<h4 class="mt-4">Edit Information User</h4>
	 <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">User Dashboard</a></li>
        <li class="breadcrumb-item"><a href="userinfo.php">User Information DataTable</a></li>
        <li class="breadcrumb-item active">Edit Information User</li>
    </ol>
    <div class="row">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-header">
    				<h4>Edit User</h4>
    			</div>
    			<div class="card-body">

    				<!-- open php -->
    				<!-- the query and the botton is the end of query  -->
    				<!-- the $_GET['id'] is base on the link like this. edit_admin.php?id=1 the id=1 is the id to use   -->
    				<?php 

    					if(isset($_GET['id'])) 
    					{
    						$user_id = $_GET['id'];  
    						$users = "SELECT * FROM users where id='$user_id'";
    						$users_run = mysqli_query($con, $users);

    						if(mysqli_num_rows($users_run) > 0)
    						{
    							foreach ($users_run as $user ) 
    							{

    							?> <!-- close php -->
    				
    				<form action="user_functioncode.php" method="POST">
    					<div class="row">

    						<input name="user_id" type="hidden" value="<?=$user['id'] ?>">


    						<!--  Full Name -->
							<div class="col-md-6 mb-3 px-1">
								<label>Full Name</label>
								<input required  class="form-control" type="text" value="<?=$user['fullname'] ?>" placeholder="Enter Full Name" name="fullname">
							</div>

							<!--  Contact Number -->
							<div class="col-md-6 mb-3">
								<label>Contact Number</label>
								<input required value="<?=$user['contact'] ?>" class="form-control" type="text" placeholder="Enter Contact Number" name="contact">
							</div>

                            <!--  Role as -->
							<div class="col-md-6 mb-3 px-1"> 
                                <label>Role as</label>
								<input required readonly="readonly" value="<?=$user['role_as'] ?>" class="form-control" type="text" name="role_as">
							</div>

							<!--  Email -->
							<div class="col-md-6 mb-3">
								<label>Email</label>
								<input required class="form-control" value="<?=$user['email'] ?>" type="email" placeholder="Enter Email Address" name="email">
							</div>

							<!--  Password -->
							<div class="col-md-6 mb-3 px-1">
								<label>Password</label>
								<input required class="form-control" value="<?=$user['password'] ?>" type="password" placeholder="Enter Password" name="password" id="password">
							</div>

							<!--  Edit_by ID account -->
							<div class="col-md-6 mb-3">
								<input name="edit_by" required type="hidden" value="<?= $_SESSION['auth_user']['user_id'] ?>">
							</div>

                            

							<!--  Function to Show Password -->
							<div class="col-md-6 mb-3 px-4">
								<input onclick="myshowpass()" class="form-check-input" type="checkbox">
						        <label  class="form-check-label" for="showpassword">Show Password</label>
							</div>

                            <!-- Edit_at -->
                            <div class="col-md-6 mb-3">
                                <input name="edit_at" type="hidden" value="<?php echo date("Y-m-d h:i:sa", $today); ?>">
                            </div>

							<!--  Button to insert to database/ create account -->
                            <div class="d-grid gap-2 d-md-block">
                                <td><a href="userinfo.php" class="btn btn-danger">Back</a></td>
                                <button type="submit" name="updateuser_btn" class="btn btn-primary">Save</button>
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