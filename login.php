<?php
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
		include('account.php');
	?>
	<script type="text/javascript">
		alert("Пожалуйста, заполните все поля");
		</script>
	<?php
		exit();
	}
	$login = strip_tags(trim($login));
	$login = htmlspecialchars($login);
	$password = strip_tags(trim($password));
	$password = htmlspecialchars($password);
	$result = mysqli_query($db, "SELECT * FROM users WHERE login='$login'");  
	$data = mysqli_fetch_array($result);
	if(empty($data['password'])){
		include('account.php');
	?>
	<script type="text/javascript">
		alert("Пользователь с таким email не зарегистрирован");
		</script>
	<?php
		exit();
	}
    if($data['password'] == hash('sha256',($_POST['password'] . $data['salt']))){
    	$id = $data['id'];
    	$token = bin2hex(random_bytes(32));
    	if($login == 'lina.alina2012.kalinina@mail.ru'){
    		$admin = 'admin';
    		setcookie("admin", $admin);
    	}
    	setcookie("token", $token);
    	$record = mysqli_query($db, "UPDATE users SET token='$token' WHERE id='$id'");
    	if ($record == TRUE){
    			header("Location: account.php"); 
    			exit();
    	} else {
    		include('account.php');
			?>
			<script type="text/javascript">
				alert("Ошибка авторизации");
			</script>
	<?php
		exit();
		}
	} else{
		include('account.php');
			?>
			<script type="text/javascript">
				alert("Ошибка авторизации, неправильный login или пароль..");
			</script>
	<?php
	}