<?php
	define("DB_SERVER", "localhost:3306");
	define("DB_USER", "admin");
	define("DB_PASS", "pass");
	define("DB_NAME", "shop");
	$db = mysqli_connect (DB_SERVER,DB_USER,DB_PASS, DB_NAME);
	$max = mysqli_query($db, "SELECT MAX(update_id) as update_id FROM bot_mes");
	if($max){
		$search = mysqli_fetch_array($max);
    	$update_id = $search['update_id'];
	}
 
