<?php
	/**
	 * @file
	 * Password reser key verification
	 */
	/**
	* @var $key
	*Key entered by user
	*/
	$key = $_POST['key'];
	/**
	 * @var $right_key
	 * Right key
	 */
	$right_key = $_COOKIE['key'];
	if($key != $right_key){
		include('key.php');
		?>
		<center>
			<h2 style='color:#B22222'>Попробуйте ввести код еще раз</h2>
		</center>
		<?php
		exit();
	}
	if($key == $right_key){
		header('Location: new_pas.php');
		exit;
	}