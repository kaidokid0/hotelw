<?php
session_start();
include('admin/config/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<style>
.bd-placeholder-img{
    width: 100%;
  height: 100%;
}
.carousel .carousel-item {
  height: 630px;
}
</style>
<?php include('messagefunction_red.php');  ?>
<?php include('messagefunction_green.php');  ?>
<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <!-- front 1 -->
      <div class="carousel-item active">
        <img src="images/sample2.jpg" class="bd-placeholder-img" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <div class="container-fluid">
          <div class="carousel-caption text-start">
            <strong><h1 class="text-dark">We make you feel.</h1></strong>
            <strong><p class="text-dark">better than at home.</p>
            <p></strong>
                <a class="btn btn-lg btn-dark" href="login.php">Book Now</a></p>
          </div>
        </div>
      </div>
      <!-- front 2 -->
      <div class="carousel-item">
        <img src="images/front 2.jpg" class="bd-placeholder-img" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

        <div class="container-fluid">
          <div class="carousel-caption">
            <strong><h1 class="text-dark">Learn more about us</h1></strong>
                <a class="btn btn-lg btn-dark" href="aboutus.php">Learn more</a></p>
          </div>
        </div>
      </div>
      <!-- front 3 -->
      <div class="carousel-item">
        <img src="images/sample3.jpg" class="bd-placeholder-img" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

        <div class="container-fluid">
          <div class="carousel-caption text-end">
            <strong><h1 class="text-dark">See Some Picture.</h1></strong>
                <a class="btn btn-lg btn-dark" href="gallery.php">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<?php
include('includes/footer.php');
include('includes/scripts.php'); // this scripts is to able auto responsive this page and to able function the  navbar-toggler-icon
?>