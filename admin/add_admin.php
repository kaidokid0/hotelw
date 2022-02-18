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
    <h4 class="mt-4">Admin</h4>
     <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Admin Dashboard</a></li>
        <li class="breadcrumb-item"><a href="admininfo.php">Administration Information DataTable</a></li>
        <li class="breadcrumb-item active">Edit Admin</li>
    </ol>
    <?php include('messagefunction_green.php');  ?> 
    <?php include('messagefunction_red.php');  ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add User</h4>
                </div>
                <div class="card-body">

                    <form  action="admin_functioncode.php" method="POST">
                        <div class="row">

                            <!--  Full Name -->
                            <div class="col-md-6 mb-3 px-1">
                                <label>Full Name</label>
                                <input required class="form-control" type="text" placeholder="Enter Full Name" name="fullname">
                            </div>

                            <!--  Contact Number -->
                            <div class="col-md-6 mb-3">
                                <label>Contact Number</label>
                                <input required class="form-control" type="text" placeholder="Enter Contact Number" name="contact">
                            </div>

                            <!--  Email -->
                            <div class="col-md-6 mb-3 px-1">
                                <label>Email</label>
                                <input required class="form-control" type="email" placeholder="Enter Email Address" name="email">
                            </div>

                            <div class="col-md-6 mb-3"> 
                                        <label for="" >Role as</label>
                                        <select name="role_as" required class="form-control">
                                            <option value="">--Select Role--</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
                                        </select>
                            </div>

                            

                            <!--  Password -->
                            <div class="col-md-6 mb-3 px-1">
                                <label>Password</label>
                                <input required class="form-control" type="password" placeholder="Enter Password" name="password" id="password">
                            </div>

                            <!--  Gender -->
                            <div class="col-md-6 mb-3">
                                <label>Gender:</label> <br>
                                <input required type="radio" name="gender" value="Male"> Male
                                <input required  type="radio" name="gender" value="Female"> Female
                            </div>

                            <!--  Function to Show Password -->
                            <div class="col-md-6 mb-3 px-4">
                                <input onclick="myshowpass()" class="form-check-input" type="checkbox">
                                <label  class="form-check-label" for="showpassword">Show Password</label>
                            </div>

                            <!--  Created_by -->
                            <div class="col-md-6 mb-3">
                                <input required type="hidden" name="create_by" value="<?= $_SESSION['auth_user']['user_id'] ?>">
                            </div>

                            <!--  Button to insert to database/ create account -->
                            <div class="d-grid gap-2 d-md-block">
                                <td><a href="admininfo.php" class="btn btn-danger">Back</a></td>
                                <button type="submit" name="addadmin_btn" class="btn btn-success" >Add Account</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>