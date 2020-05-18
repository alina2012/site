<?php
	/**
	* @file
	* Update password
	*/  
	require_once("bd.php");
	require_once("src/Classes/Models/DB.php");
    $database = new \App\Models\DB();
	/**
	 * @var $email
	 * Email entered
	 */
	$email = $_COOKIE['email'];
	/**
	 * @var $pass
	 * Password entered
	 */
	$pass = $_POST['password'];
	/**
	 * @var $conf_pass
	 * Password for confirmation
	 */
	$conf_pass = $_POST['conf_pass'];
	if($pass == $conf_pass){
		$data = $database->getRecord($db, "users", "login", $email);
		if(empty($data['id'])){
			setcookie("key", "", time() - 3600);
			setcookie("email", "", time() - 3600);
			include('account.php');
			?>
			<script type="text/javascript">
				alert("Ошибка сброса пароля");
			</script>

	<?php
			exit();
		}
	/**
	 * @var $salt
	 * Hash salt
	 */
		$salt = $data['salt'];
	/**
	 * @var $password
	 * New password
	 */
		$password = hash('sha256',($pass . $salt));
		$password = mysqli_real_escape_string ( $db , $password);
		$record = $database->updateRecord($db, "users", "password", $password, "login", $email);
    	if ($record == TRUE){
    			setcookie("key", "", time() - 3600);
    			setcookie("email", "", time() - 3600);
    			header("Location: account.php"); 
    			exit();
    	} else {
    		setcookie("key", "", time() - 3600);
    		setcookie("email", "", time() - 3600);
    		include('account.php');
			?>
			<script type="text/javascript">
				alert("Ошибка авторизации");
			</script>
	<?php
		exit();
		}
	} 