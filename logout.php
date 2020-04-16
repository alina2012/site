<?php
	setcookie("token", "", time() - 3600);
	if(isset($_COOKIE['admin'])){
		setcookie("admin", "", time() - 3600);
	}
    header('Location: \myshop.ru\account.php');
	exit;