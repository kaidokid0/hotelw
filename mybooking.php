<?php
session_start();
include('admin/config/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid px-4">
<h1 class="mt-4">MyBooking Dashboard</h1>
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
                <a class="small text-black stretched-link" href="bookingpending.php?id=<?= $_SESSION['auth_user']['user_id'] ?>">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-black mb-4">
            <div class="card-body">Booking Check in</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingcheckin.php?id=<?= $_SESSION['auth_user']['user_id'] ?>"> View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-black mb-4">
            <div class="card-body">Booking Check Out</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingcheckout.php?id=<?= $_SESSION['auth_user']['user_id'] ?>">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-black mb-4">
            <div class="card-body">Booking Missed</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingmissed.php?id=<?= $_SESSION['auth_user']['user_id'] ?>">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-light mb-4">
            <div class="card-body">Booking Cancellations</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="bookingcancel.php?id=<?= $_SESSION['auth_user']['user_id'] ?>">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

</div>
<br><br><br><br><br><br><br><br>




<?php
include('includes/footer.php');
include('includes/scripts.php'); // this scripts is to able auto responsive this page and to able function the  navbar-toggler-icon
?>