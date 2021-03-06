<?php
	/**
	 * @file
	 * Change contact details
	 */
	require_once("bd.php");
	require_once("src/Classes/Models/DB.php");
    $database = new \App\Models\DB();
	/**
	 * @var $name
	 * Name entered
	 */
	$name = $_REQUEST['name'];
	/**
	 * @var $email
	 * Email entered
	 */
	$email = $_REQUEST['email'];
	/**
	 * @var $phone
	 * Phone entered
	 */
	$phone = $_REQUEST['phone'];
	/**
	 * @var $old_pas
	 * Old password 
	 */
	$old_pas = $_REQUEST['old_pas'];
	/**
	 * @var $new_pas
	 * New password
	 */
	$new_pas = $_REQUEST['new_pas'];
	/**
	 * @var $pas_con
	 * Password for confirmation
	 */
	$pas_con = $_REQUEST['pas_con'];
	/**
	 * @var $token
	 * Authorization token
	 */
	$token = $_COOKIE['token'];
	/**
	* @var $data User data from database
	*/  
	$data = $database->getRecord($db, "users", "token", $token);
		$salt = $data['salt'];
		$pass = hash('sha256',($old_pas . $salt));
		if($pass == $data['password']){
			if($new_pas == $pas_con){
				$password = hash('sha256',($new_pas . $salt));
				$password = mysqli_real_escape_string ( $db , $password);
				$record1 = $database->updateRecord($db, "users", "password", $password, "token", $token);
				$record2 = $database->updateRecord($db, "users", "name", $name, "token", $token);
				$record3 = $database->updateRecord($db, "users", "login", $email, "token", $token);
				$record4 = $database->updateRecord($db, "users", "phone", $phone, "token", $token);
			}
		} else {
				$record1 = $database->updateRecord($db, "users", "name", $name, "token", $token);
				$record2 = $database->updateRecord($db, "users", "login", $email, "token", $token);
				$record3 = $database->updateRecord($db, "users", "phone", $phone, "token", $token);
		}