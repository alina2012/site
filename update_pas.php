<?php
	require_once("bd.php");
	$email = $_COOKIE['email'];
	$pass = $_POST['password'];
	$conf_pass = $_POST['conf_pass'];
	if($pass == $conf_pass){
		$result = mysqli_query($db, "SELECT * FROM users WHERE login='$email'");
		$data = mysqli_fetch_array($result);
		if(empty($data['id'])){
			setcookie("key", "", time() - 3600);
			setcookie("email", "", time() - 3600);
			include('\myshop.ru\account.php');
			?>
			<script type="text/javascript">
				alert("Ошибка сброса пароля");
			</script>

	<?php
			exit();
		}
		$salt = $data['salt'];
		$password = hash('sha256',($pass . $salt));
		$password = mysqli_real_escape_string ( $db , $password);
		$record = mysqli_query($db, "UPDATE users SET password='$password' WHERE login='$email'");
    	if ($record == TRUE){
    			setcookie("key", "", time() - 3600);
    			setcookie("email", "", time() - 3600);
    			header("Location: \myshop.ru\account.php"); 
    			exit();
    	} else {
    		setcookie("key", "", time() - 3600);
    		setcookie("email", "", time() - 3600);
    		include('\myshop.ru\account.php');
			?>
			<script type="text/javascript">
				alert("Ошибка авторизации");
			</script>
	<?php
		exit();
		}
	} 