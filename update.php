<?php
	require_once("bd.php");
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$old_pas = $_REQUEST['old_pas'];
	$new_pas = $_REQUEST['new_pas'];
	$pas_con = $_REQUEST['pas_con'];
	$token = $_COOKIE['token'];
	$result = mysqli_query($db, "SELECT * FROM users WHERE token='$token'");
	$data = mysqli_fetch_array($result);
		$salt = $data['salt'];
		$pass = hash('sha256',($old_pas . $salt));
		if($pass == $data['password']){
			if($new_pas == $pas_con){
				$password = hash('sha256',($new_pas . $salt));
				$password = mysqli_real_escape_string ( $db , $password);
				$record1 = mysqli_query($db, "UPDATE users SET password='$password' WHERE token='$token'");
				$record2 = mysqli_query($db, "UPDATE users SET name='$name' WHERE token='$token'");
				$record3 = mysqli_query($db, "UPDATE users SET login='$email' WHERE token='$token'");
				$record4 = mysqli_query($db, "UPDATE users SET phone='$phone' WHERE token='$token'");
			}
		} else {
				$record1 = mysqli_query($db, "UPDATE users SET name='$name' WHERE token='$token'");
				$record2 = mysqli_query($db, "UPDATE users SET login='$email' WHERE token='$token'");
				$record3 = mysqli_query($db, "UPDATE users SET phone='$phone' WHERE token='$token'");
		}