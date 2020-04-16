<?php
	require_once("bd.php");
	if(isset($_POST['client'])){
		$name = $_POST['client'];
		if($name == ''){
			unset($name);
		}
	}
	if(isset($_POST['phone'])){
		$phone = $_POST['phone'];
		if($phone == ''){
			unset($phone);
		}
	}
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
	if(isset($_POST['conf-password'])){
		$confPass = $_POST['conf-password'];
		if($confPass == ''){
			unset($confPass);
		}
	}
    
	if( empty($name) || empty($phone) || empty($login) ||empty($password) || empty($confPass)){
		include('signup.php');
	?>
	<script type="text/javascript">
		alert("Пожалуйста, заполните все поля");
	</script>
	<?php
		exit();
	}
	if($password != $confPass){
		include('signup.php');
	?>
	<script type="text/javascript">
		alert("Пароли не совпадают");
	</script>
	<?php
		exit();
	}
	$name = strip_tags(trim($name));
	$name = htmlspecialchars($name);
	$phone = strip_tags(trim($phone));
	$phone = htmlspecialchars($phone);
	$login = strip_tags(trim($login));
	$login = htmlspecialchars($login);
	$password = strip_tags(trim($password));
	$password = htmlspecialchars($password);
	$result = mysqli_query($db, "SELECT id FROM users WHERE login='$login'");
	if($result){
		$data = mysqli_fetch_array($result);
		if(($data['id'])){
			include('signup.php');
		?>
		<script type="text/javascript">
			alert("Пользователь с таким email уже существует");
		</script>
		<?php
			exit();
		}
	}
	$salt = random_bytes(10);
	$salt = bin2hex($salt);
	$password = hash('sha256',($password . $salt));
	$name = mysqli_real_escape_string ( $db , $name);
	$phone = mysqli_real_escape_string ( $db , $phone);
	$login = mysqli_real_escape_string ( $db , $login);
	$password = mysqli_real_escape_string ( $db , $password);
	$salt = mysqli_real_escape_string ( $db , $salt);
	$token = bin2hex(random_bytes(32));
    setcookie("token", $token);
    
	$record = mysqli_query($db, "INSERT INTO users (name, login, salt, password, token, phone) VALUES ('$name','$login', '$salt', '$password', '$token', '$phone')");

	if ($record =='TRUE')
   		{
	    	header('Location: account.php');
			exit;
	    } else {
	    	setcookie("token", "", time() - 3600);
	    	include('signup.php');
		?>
		<script type="text/javascript">
		alert("Ошибка регистрации, попробуйте позднее..");
		</script>
		<?php
			exit();
	}