<!-- this is from header.php to allow to display all insidei in header the in index.php-->
<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
<h1 class="mt-4">Hotel Admin Dashboard</h1>
<?php include('messagefunction_green.php');  ?> 
<?php include('messagefunction_red.php');  ?>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-black mb-4">
            <div class="card-body">Booking Pendings</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingpending.php">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-black mb-4">
            <div class="card-body">Booking Check in</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingcheckin.php">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-black mb-4">
            <div class="card-body">Booking Check Out</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingcheckout.php">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-black mb-4">
            <div class="card-body">Booking Missed</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingmissed.php">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-light mb-4">
            <div class="card-body">Booking Cancellations</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingcancel.php">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card text-black bg-secondary mb-4">
            <div class="card-body">User Information</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="userinfo.php">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card text-black bg-info mb-4">
            <div class="card-body">Admin Information</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="admininfo.php">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-black mb-4">
            <div class="card-body">User Block List</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="blocklist.php">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

</div>




<!-- this is from footer.php to allow to display the script of side bar in index.php-->
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>