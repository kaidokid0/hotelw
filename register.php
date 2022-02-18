<?php
session_start(); // to start the function of message to show the message

if(isset($_SESSION['auth'])) // function to block on this page  who already login
{
	if(!isset($_SESSION['red'])) { // to show message and not interrupted other function message
		$_SESSION['red'] = "You can not go to Register because you are already Login in";
	}
		header("Location: index.php");
		exit(0);
}

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
						<h4>Registration Form</h4>
					</div>

					<div class="card-body">

						<form  action="registercode.php" method="POST">

							<!--  Full Name -->
							<div class="form-group mb-3">
								<label>Full Name</label>
								<input required class="form-control" type="text" placeholder="Enter Full Name" name="fullname">
							</div>

							<!--  Contact Number -->
							<div class="form-group mb-3">
								<label>Contact Number</label>
								<input required class="form-control" type="text" placeholder="Enter Contact Number" name="contact">
							</div>

							<!--  Gender -->
							<div class="form-group mb-3">
								<label>Gender:</label> <br>
								<input required type="radio" name="gender" value="Male"> Male
								<input required  type="radio" name="gender" value="Female"> Female
							</div>

							<!--  Role_As User -->
							<div class="form-group mb-3">
								<input required type="hidden" name="role_as" value="User">
							</div>

							<!--  Email -->
							<div class="form-group mb-3">
								<label>Email</label>
								<input required class="form-control" type="email" placeholder="Enter Email Address" name="email">
							</div>

							<!--  Password -->
							<div class="form-group mb-3">
								<label>Password</label>
								<input required class="form-control" type="password" placeholder="Enter Password" name="password" id="password">
							</div>

							<!--  Created_by -->
							<div class="form-group mb-3">
								<input required type="hidden" name="create_by" value="null">
							</div>

							<!--  Function to Show Password -->
							<div class="form-group mb-3 px-4">
								<input onclick="myshowpass()" class="form-check-input" type="checkbox">
						        <label  class="form-check-label" for="showpassword">Show Password</label>
							</div>

							<!--  Button to insert to database/ create account -->
							<div class="form-group mb-3">
								<button type="submit" name="register_btn" class="btn btn-primary" >Sign up</button>
							</div>

						</form>	

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
