<?php
	/**
	* @file
	* Getting user data
	*/
	require_once("bd.php");
	/**
	* @var $token
	* Unique user token
	*/
	$token = $_COOKIE['token'];
	$result = mysqli_query($db, "SELECT * FROM users WHERE token='$token'");
	/**
	* @var $data
	* Array with user data
	*/
	$data = mysqli_fetch_array($result);
	echo json_encode($data);