<?php
	/**
	* @file
	* Getting user data
	*/
	require_once("bd.php");
	require_once("src/Classes/Models/DB.php");
    $database = new \App\Models\DB();
	/**
	* @var $token
	* Unique user token
	*/
	$token = $_COOKIE['token'];
	/**
	* @var $data
	* Array with user data
	*/
	$data = $database->getRecord($db, "users", "token", $token);
	echo json_encode($data);