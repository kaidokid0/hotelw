<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/kisspng-w-hotels-starwood-marriott-international-logo-produce-48-logo-5b485aad9534e0.2888261015314684616112.png" alt="" width="100" height="100">
    </a>
    <a class="navbar-brand" href="index.php">W Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

         <!-- home or index -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=index.php>Home</a>
        </li>

        <!-- Gallery  -->
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>

         <!-- contact from login user -->
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">Contact us</a>
        </li>
        

      
        <!-- this is will shown if you login -->
        <?php if(isset($_SESSION['auth_user'])) : ?>
         <!-- to function if condition is true or login is true the login and register will be hidden -->     

         <!-- contact from login user -->

         <!-- offer user login user -->
        <li class="nav-item">
          <a class="nav-link" href="offer.php">Offers</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
      <!-- if the condition in top is true the user_name of user will be display here  -->    
          <?= $_SESSION['auth_user']['user_name'] ?>

          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

             <!-- profile setting -->
              <li><a class="dropdown-item" href="myaccount.php?id=<?= $_SESSION['auth_user']['user_id'] ?>">My Profile</a></li>

            <li> 
              <!-- Logout Button  -->
              <form action="logout.php" method="POST">

                 <!-- logout button -->
                <button type="submit" name="logout_btn" class="dropdown-item" >Logout</button>
              </form>
            </li>

            <!-- auto hide if you login on system -->
          </ul>
        </li>
        <?php else : ?>  <!-- this is connected to function on top and the last is below -->

        <!-- offer from vist only -->
        <li class="nav-item">
          <a class="nav-link" href="viewoffer.php">Offers</a>
        </li>

        <!-- Login -->
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>

        <!-- Sign up -->
        <li class="nav-item">
          <a class="nav-link" href="register.php">Sign up</a>
        </li>

         <?php endif; ?> <!-- this is last last function connected to condition and below -->

      </ul>
      
    </div>
  </div>
</nav>