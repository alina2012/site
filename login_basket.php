<?php
	/**
	 * @file
	 * Authorization when placing an order in the basket
	 */
	include('bd.php');
	if(isset($_POST['email'])){

		$login = $_POST['email'];
		if($login == ''){
			unset($login);
		}
	}
	if(isset($_POST['password'])){
	
		$password = $_POST['password'];
		if($password == ''){
			unset($password);
		}
	}
	if(empty($login) || empty($password)){
		include('new-order.php');
	?>
	<script type="text/javascript">
		alert("Пожалуйста, заполните все поля");
		</script>
	<?php
		exit();
	}
	$login = strip_tags(trim($login));
	/**
	 * @var $login
	 * Login entered
	 */
	$login = htmlspecialchars($login);
	$password = strip_tags(trim($password));
	/**
	 * @var $password
	 * Password entered
	 */
	$password = htmlspecialchars($password);
	$result = mysqli_query($db, "SELECT * FROM users WHERE login='$login'");
	/**
	* @var $data User data from database
	*/  
	$data = mysqli_fetch_array($result);
	if(empty($data['password'])){
		include('new-order.php');
	?>
	<script type="text/javascript">
		alert("Пользователь с таким email не зарегистрирован");
		</script>
	<?php
		exit();
	}
    if($data['password'] == hash('sha256',($_POST['password'] . $data['salt']))){
    	/**
    	* @var $id 
    	* Database entry id
    	*/
    	$id = $data['id'];
    	/**
    	* @var $token
    	* Authorization Token
    	*/
    	$token = bin2hex(random_bytes(32));
    	setcookie("token", $token);
    	$record = mysqli_query($db, "UPDATE users SET token='$token' WHERE id='$id'");
    	if ($record == TRUE){
    			header("Location: new-order.php"); 
    			exit();
    	} else {
    		include('new-order.php');
			?>
			<script type="text/javascript">
				alert("Ошибка авторизации");
			</script>
	<?php
		exit();
		}
	} else{
		include('new-order.php');
			?>
			<script type="text/javascript">
				alert("Ошибка авторизации, неправильный login или пароль..");
			</script>
	<?php
	}