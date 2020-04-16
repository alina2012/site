<?php
	require_once("bd.php");
	$order_id = $_REQUEST['id'];
	$status = $_REQUEST['status'];
	$result = mysqli_query($db, "UPDATE order_table SET status='$status' WHERE order_id='$order_id'");
	trigger_error(mysql_error($bd));