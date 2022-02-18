<?php
session_start();

if(isset($_POST['logout_btn']))  // logout function
{
	// session_destroy(); = if you want to destroy all session
	unset( $_SESSION['auth']);		// if you want to destroy onloy auth session
	unset( $_SESSION['auth_role']);	// if you want to destroy onloy auth_role session
	unset( $_SESSION['auth_user']);	// if you want to destroy onloy auth_user session

	$_SESSION['green'] = "Logged Out Successfully";
	header("Location: login.php");
	exit(0);
}
?>