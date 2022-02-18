<?php  
session_start();
include('admin/config/dbcon.php');

if(isset($_POST['login_btn']))
{
	$email = mysqli_real_escape_string($con, $_POST['email']);
 	$password = mysqli_real_escape_string($con, $_POST['password']);

 	$login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1"; // to limit only one login
 	$login_query_run = mysqli_query($con, $login_query);

 	if(mysqli_num_rows($login_query_run) > 0)
 	{

	 		foreach ($login_query_run as $data) {

	 			// to show the detail of user
	 			$user_id = $data['id'];
	 			$user_name = $data['fullname'];
	 			$role_as = $data['role_as'];
	 			
	 		}

	 		// to no need to in login again or to have session the login form 
	 		$_SESSION['auth'] = true;  
	 		$_SESSION['auth_role'] =  "$role_as"; // to indentify the  1=admin, or 0 = user by number
	 		$_SESSION['auth_user'] = [  // to show the info of user 
	 			'user_id'=>$user_id,
	 			'user_name'=>$user_name,
	 			'user_email'=>$user_email,
	 		];

	 		if($_SESSION['auth_role'] == 'Admin')   // 1 = admin
	 		{
	 			$_SESSION['green'] = "Welcome to Admin $user_name";
				header("Location: admin/index.php");
				exit(0);

	 		}

	 		elseif($_SESSION['auth_role'] == 'User') // 0 = user
	 		{ 

	 			$_SESSION['green'] = "You are Logged in Now $user_name";
				header("Location: index.php");
				exit(0);

			}
			
			elseif($_SESSION['auth_role'] == 'Block') // 0 = block user
			{
				$_SESSION['red'] = "This user is Block, go to customer service to unblock this user."; 
				unset( $_SESSION['auth']);
				unset( $_SESSION['auth_role']);
				unset( $_SESSION['auth_user']);
				header("Location: login.php");
				exit(0);

	 		}
 	}else{

 		$_SESSION['red'] = "Invalid Email or Password";
		header("Location: login.php");
		exit(0);

 	}

}else{

	$_SESSION['red'] = "Your are not allowed to access this file";
	header("Location: login.php");
	exit(0);
}


?>g