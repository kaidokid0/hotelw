<?php
include('admin/config/dbcon.php');

public function getusersdata($id) // to display the data in database
	{

		$array = array();
		$q = mysqli_query("SELECT * FROM `users` WHERE `id`=".$id)
		while ($r = mysqi_query_assoc($q)) 
		{
			$array['id'] = $r['id'];
			$array['fullname'] = $r['fullname'];
			$array['contact'] = $r['contact'];
			$array['gender'] = $r['gender'];
			$array['role_as'] = $r['role_as'];
			$array['email'] = $r['email'];
			$array['password'] = $r['password'];
			$array['create_by'] = $r['create_by'];
			$array['created_at'] = $r['created_at'];
		}

		return $array;
	}

	function getId($email)
	{
		$q = mysqli_query("SELECT 'id' FROM 'users' WHERE 'email'=".$email);
		while ($r = mysqi_query_assoc($q))
		{
			return $r['id'];
		}
	}

	$userData = getusersdata(getId(isset($_SESSION['auth']));


?>