<?php
	require_once("bd.php");
	$token = $_COOKIE['token'];
	$result = mysqli_query($db, "SELECT * FROM users WHERE token='$token'");
	$data = mysqli_fetch_array($result);
	echo json_encode($data);