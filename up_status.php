<?php
	/**
	* @file
	* Order status Update
	*/
	require_once("bd.php");
	/**
	* @var $order_id 
	* Order id
	*/
	$order_id = $_REQUEST['id'];
	/**
	* @var $status
	* New order status
	*/
	$status = $_REQUEST['status'];
	$result = $database->updateRecord($db, "order_table", "status", $status, "order_id", $order_id);
	trigger_error(mysql_error($bd));