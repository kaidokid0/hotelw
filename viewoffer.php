<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');
?>


<style>
.card-img-top {
    width: 100%;
    height: 50%;
    height: 20vw;
    object-fit: cover;
}

</style>
<br><br>
<strong><h1 style="text-align: center;" class="text-dark">Offers</h1></strong>
				<?php include('messagefunction_red.php');  ?>
				<?php include('messagefunction_green.php');  ?>
<br>
<br>
<div class="container-sm">

  <div class="row">

    <div class="col-sm">

		<div class="card">
			<img src="images/room/single room sample 1.jpg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Single Bed</h5>
					<p class="card-text">Php. 2,000.00/ per day</p>
					<p class="card-text">Free use Wifi</p>
					<p class="card-text">Free Parking for Guest</p>
					<p class="card-text">Hot & cold shower</p>
					<p class="card-text">Refrigerator and mini bar on demand in all suites and superior rooms</p>
					<a href="login.php" class="btn btn-dark">Book now</a>
				</div>
		</div>

    </div>

    <div class="col-sm">

		<div class="card">
			<img src="images/room/twin room sample 2.jpg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Double Bed</h5>
					<p class="card-text">Php. 3,000.00/ per day</p>
					<p class="card-text">Free use Wifi</p>
					<p class="card-text">Free Parking for Guest</p>
					<p class="card-text">Hot & cold shower</p>
					<p class="card-text">Refrigerator and mini bar on demand in all suites and superior rooms</p>
					<a href="login.php" class="btn btn-dark">Book now</a>
				</div>
		</div>

    </div>

    <div class="col-sm">

		<div class="card">
			<img src="images/room/three room sample 1.jpg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Triple Bed</h5>
					<p class="card-text">Php. 4,000.00/ per day</p>
					<p class="card-text">Free use Wifi</p>
					<p class="card-text">Free Parking for Guest</p>
					<p class="card-text">Hot & cold shower</p>
					<p class="card-text">Refrigerator and mini bar on demand in all suites and superior rooms</p>
					<a href="login.php" class="btn btn-dark">Book now</a>
				</div>
		</div>

    </div>

  </div>
</div>
<br><br>


<?php
include('includes/footer.php');
include('includes/scripts.php'); // this scripts is to able auto responsive this page and to able function the  navbar-toggler-icon
?>