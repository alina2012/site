<?php
	/**
    * @file
    * Database connection
    */
    /**
    * Server Port
    */
	define("DB_SERVER", "localhost:3308");
	/**
    * Login 
    */
	define("DB_USER", "root");
	/**
    * Password
    */
	define("DB_PASS", "");
	/**
    * Database Name
    */
	define("DB_NAME", "shop");
	/**
    * @var $db
    * Connection for database
    */
	$db = mysqli_connect (DB_SERVER,DB_USER,DB_PASS, DB_NAME);
	mysqli_query($db, "SET NAMES utf8");
	$max = mysqli_query($db, "SELECT MAX(update_id) as update_id FROM bot_mes");
	if($max){
		$search = mysqli_fetch_array($max);
	/**
    * @var $max
    * The number of the last message processed
    */
    	$update_id = $search['update_id'];
	}
 
