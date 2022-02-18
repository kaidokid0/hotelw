<?php
session_start(); // to start the function of message to show the message

if(isset($_SESSION['auth'])) // function to block on this page  who already login
{

	// to show message and not interrupted other function message
	if(!isset($_SESSION['red'])) 
	{ 
		$_SESSION['red'] = "You can not go to Login because you are already Login in";
	}
		header("Location: index.php");
		exit(0);
}

include('includes/header.php');
include('includes/navbar.php');

?> 

<div class="bg-light py-5">
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">

	        	<?php include('messagefunction_red.php');  ?>
				<?php include('messagefunction_green.php');  ?>
	        	
	            <div class="card shadow-lg border-0 rounded-lg mt-5">
	                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login Form</h3></div>
	                <div class="card-body">
	                  
	                        <form  action="logincode.php" method="POST">

	                        <div class="form-group mb-3">
								<label>Email</label>
								<input required class="form-control" type="email" placeholder="Enter Email Address" name="email">
							</div>

							<div class="form-group mb-3">
								<label>Password</label>
								<input required class="form-control" type="password" placeholder="Enter Password" name="password" id="password">
							</div>

							<div class="form-group mb-3 px-4">
								<input onclick="myshowpass()" class="form-check-input" type="checkbox">
						        <label  class="form-check-label" for="showpassword">Show Password</label>
							</div>

							<div class="form-group mb-3">
								<button name="login_btn" type="submit" class="btn btn-primary btn-lg">Login</button>
							</div>
	                         
	                        

	                    </form>
	                </div>
	                <div class="card-footer text-center py-3">
	                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
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
