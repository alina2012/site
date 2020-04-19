<?php
	require_once("bd.php");
	require 'lib/PHPMailer/PHPMailerAutoload.php';
	$email = $_POST['email'];
	setcookie("email", $email);
	$result = mysqli_query($db, "SELECT * FROM users WHERE login='$email'");
	$data = mysqli_fetch_array($result);
	if(!$data['id']){
		include('forgot.php');
			?>
			<center>
				<h2 style='color:#B22222'>Пользователь с таким email не зарегистрирован!</h2>
			</center>
			<?php
				exit();
	}

	$key = random_bytes(10);
	$key = bin2hex($key);
	setcookie("key", $key);
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.mail.ru';
	$mail->SMTPAuth = true;
	$mail->Username = '3843_reserve';
	$mail->Password = '01071978*';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	$mail->CharSet = 'UTF-8';
	$mail->From = '3843_reserve@mail.ru';
	$mail->FromName = '3843';
	$mail->AddAddress($email);
	$mail->isHTML(true);
	$mail->Subject = 'Verification key';
	$body = 'Вы указали свой почтовый адрес для восстановления пароля в магазине CoffeTime. Пожалуйста, введите этот код:<p>'.$key.'</p> в окошко на сайте.';
	$mail->Body = $body;
	if($mail->send()){
		header('Location: key.php');
		exit;
	} else {
		include('forgot.php');
		?>
		<center>
			<h2 style='color:#B22222'>Не удалось отправить код, пожалуйста, попробуйте еще раз, <?php echo $mail->ErrorInfo ?></h2>
		</center>
		<?php
		exit();
	}