<?php
	    /**
    	* @file
    	* Checkout
    	*/
	require_once("bd.php");
	/**
    * @var $token
    * Authorization Token
    */
	$token = $_COOKIE['token'];
	$result = mysqli_query($db, "SELECT * FROM users WHERE token='$token'");
	/**
	* @var $data User data from database
	*/  
	$data = mysqli_fetch_array($result);
	/**
	* @var $email User email
	*/  
	$email = $data['login'];
	/**
	* @var $shop Product List
	*/  
	$shop = $_COOKIE['shop'];
	/**
	* @var $shop1 Product List
	*/  
	$shop1 = json_decode($shop);
	/**
	* @var $count Number of goods
	*/  
	$count = count($shop1);
	/**
	* @var $order array Order
	*/  
	$order = array();
	for($i = 0; $i<$count; $i++){
		if($shop1[$i]->quantity1 != 0 && $shop1[$i]->quantity2 == 0){
			$order[$shop1[$i]->id] = array('price1' => $shop1[$i]->price1, 'quantity1' => $shop1[$i]->quantity1);
		}
		if($shop1[$i]->quantity2 != 0 && $shop1[$i]->quantity1 == 0){
			$order[$shop1[$i]->id] = array('price2' => $shop1[$i]->price2, 'quantity2' => $shop1[$i]->quantity2);
		}
		if($shop1[$i]->quantity2 != 0 && $shop1[$i]->quantity1 != 0){
			$order[$shop1[$i]->id] = array('price1' => $shop1[$i]->price1, 'quantity1' => $shop1[$i]->quantity1,'price2' => $shop1[$i]->price2, 'quantity2' => $shop1[$i]->quantity2);
		}
	}
	$my_json = json_encode($order); 
	/**
	* @var $order_id Order Id
	*/  
	$order_id = rand();
	$my_json = mysqli_real_escape_string ( $db , $my_json);
	$order_id = mysqli_real_escape_string ( $db , $order_id);
	$record = mysqli_query($db, "INSERT INTO order_table (order_id, email, composition, status) VALUES ('$order_id','$email', '$my_json', 1)");
	if ($record =='TRUE')
   		{
	    	header('Location: account.php');
			exit;
	    } else {
	    	include('basket.php');
		?>
		<script type="text/javascript">
		alert("Возникла ошибка при оформлении заказа, попробуйте позднее..");
		</script>
		<?php
			exit();
	}
