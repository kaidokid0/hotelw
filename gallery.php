<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');
?>

<style>
.text{
	text-align: center;
     
}
</style>


<div style = "margin-left:25;" class = "container-sm">
			<div class = "panel panel-default">
				<div class="text">
						<strong><h1 class="text-dark">Gallery</h1></strong>
					</div>
				<div class="panel-body">
					<br />
					<br />

					
					<div class="container-sm">

						<div class="text">
						<strong><h1 class="text-dark">Hotel Room</h1></strong>
					</div>

					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/gallery/1.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/gallery/2.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/gallery/3.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/gallery/4.jpg" width = "250" height = "250"/>
					</div>

					<br style = "clear:both;" />
					<br />

					<div class="text">
						<strong><h1 class="text-dark">Hotel Lobby</h1></strong>
					</div>

					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/gallery/1.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/gallery/6.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/gallery/7.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/gallery/10.jpg" width = "250" height = "250"/>
					</div>

					<br style = "clear:both;" />
					<br />

					<div class="text">
						<strong><h1 class="text-dark">Hotel Dine</h1></strong>
					</div>

					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/dine/1.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/dine/2.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/dine/3.jpg" width = "250" height = "250"/>
					</div>
					<div style = "float:left; width:250px; height:250px; margin-left:70px;">
						<img src = "images/dine/4.jpg" width = "250" height = "250"/>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php
include('includes/scripts.php'); // this scripts is to able auto responsive this page and to able function the  navbar-toggler-icon
?>