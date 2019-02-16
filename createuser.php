<?php
//session start();
$username = ($_POST['username']);
$email = ($_POST['email']);
	$password = ($_POST['password']);

	 $q = mysqli_connect("localhost","root","","affluence_tt") or die(mysqli_error());

	$new = mysqli_query($q,"INSERT into users($username,$password,$email");


 ?>
