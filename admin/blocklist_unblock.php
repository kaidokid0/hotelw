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
    <h4 class="mt-4">Block List</h4>
     <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Block List Dashboard</a></li>
        <li class="breadcrumb-item"><a href="blocklist.php">Block List DataTable</a></li>
        <li class="breadcrumb-item active">Unblock User</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add User</h4>
                </div>
                <div class="card-body">

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

                    <form  action="blocklist_function.php" method="POST">
                        <div class="row">
                            <!-- id -->
                            <input name="user_id" type="hidden" value="<?=$user['id'] ?>">

                            <!-- role use -->
                            <div class="col-md-6 mb-3 px-1"> 
                                        <label for="" >Role as</label>
                                        <select name="role_as" required class="form-control">
                                            <option value="">--Select Role--</option>
                                            <option value="Admin" <?= $user['role_as'] == 'Admin' ? 'selected':'' ?> >Admin</option>
                                            <option value="User" <?= $user['role_as'] == 'User' ? 'selected':'' ?> >User</option>
                                            <option value="Block" <?= $user['role_as'] == 'Block' ? 'selected':'' ?> >Block</option>
                                        </select>
                            </div>

                            <!--  Edit_by ID account -->
                            <div class="col-md-6 mb-3">
                                <input name="edit_by" required type="hidden" value="<?= $_SESSION['auth_user']['user_id'] ?>">
                            </div>

                            <!-- Edit_at -->
                            <div class="col-md-6 mb-3">
                                <input name="edit_at" type="hidden" value="<?php echo date("Y-m-d h:i:sa", $today); ?>">
                            </div>
                            <!-- button -->
                            <div class="d-grid gap-2 d-md-block">
                                <td><a href="userinfo.php" class="btn btn-danger">Back</a></td>
                                <button type="submit" name="ublock_btn" class="btn btn-success" >Unblock Account</button>
                            
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