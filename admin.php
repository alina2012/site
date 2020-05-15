<?php
	/**
    * @file
    * Forwarding to the control panel
    */
	if(isset($_COOKIE['admin'])){
		header("Location: change.php"); 
    	exit();
	} else {
		header("Location: account.php"); 
    	exit();
	}