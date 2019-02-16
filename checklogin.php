<?php
session start();
$username = ($_POST['username']);
	$password = ($_POST['password']);
  $email = ($_POST['email']);
	 $q = mysqli_connect("localhost", "","","adfluence_tt") or die(mysql_error());
	$dbuser = mysqli_query($q,"SELECT * from users WHERE username='$username' AND id ='$id'");
		$exists = mysqli_num_rows($dbuser);

		if($exists > 0)
		{

			$row = mysqli_fetch_assoc($query);
			if(($username == $row['username']) && ($password == $row['password']))
		{

					if($row['email']== 'admin@gmail.com')
					{
						$_SESSION['admin'] = $username;
					    header("location: admin.php");
				    }
						else 
						{
							$_SESSION['user'=$username];
							header("location: user.php")
						}





?>
