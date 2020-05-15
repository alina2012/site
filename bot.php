<meta http-equiv="refresh" content="12">
<?php
	/**
	 * @file
	 * Bot Submission Page
	 */
	require_once("bd.php");
	/**
	 * Telegram token
	 */
	define('TELEGRAM_TOKEN', '1004268793:AAHicp3O1VJFNWRrj9-fmjGPERjgLP02QHE');
	$update_id += 1;
		$ch = curl_init();
	    curl_setopt_array(
	        $ch,
	        array(
	            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/getUpdates?offset='.$update_id,
	            CURLOPT_POST => TRUE,
	            CURLOPT_RETURNTRANSFER => TRUE,
	            CURLOPT_TIMEOUT => 10,
	            CURLOPT_PROXY => '5.206.232.190:56212',
	            CURLOPT_PROXYTYPE => CURLPROXY_SOCKS4,
	            CURLOPT_PROXYAUTH => CURLAUTH_BASIC,
	            CURLOPT_SSL_VERIFYPEER => 0,
	            CURLOPT_SSL_VERIFYHOST => 0,
	        )
	    );
	    $result = curl_exec($ch);
	    $response = file_put_contents('text.php', $result);
	    curl_close($ch);
	    $result1 = json_decode($result, JSON_OBJECT_AS_ARRAY);
	    var_dump($result1);
	    if($result1['ok']){
	        foreach ($result1['result'] as $update){
	        	$chat_id = $update['message']['chat']['id'];
	            $text = $update['message']['text'];   //текст сообщения
	            $update_id = $update['update_id'];  //номер события
	            $result = mysqli_query($db, "SELECT id FROM bot_mes WHERE chat_id='$chat_id'");
				$data = mysqli_fetch_array($result);
				$chat_id = mysqli_real_escape_string ( $db , $chat_id);
				$update_id = mysqli_real_escape_string ( $db , $update_id);
				$text = mysqli_real_escape_string ( $db , $text);
				if(empty($data['id'])){
					$record = mysqli_query($db, "INSERT INTO bot_mes (chat_id, update_id, text_mes) VALUES ('$chat_id','$update_id', '$text')");
					message_to_telegram($text, $chat_id, $db);
				}
				if(!empty($data['id'])){
						$record = mysqli_query($db, "UPDATE bot_mes SET update_id='$update_id' WHERE chat_id='$chat_id'");
						$record2 = mysqli_query($db, "UPDATE bot_mes SET text_mes='$text' WHERE chat_id='$chat_id'");
						message_to_telegram($text, $chat_id, $db);
				}
	            
	        }
	    }
/**
 * 
 * Connection initialization
 *
 * Initializing a connection to send and receive messages
 *
 * @return Curl handle
 */
function init(){
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_PROXY => '5.206.232.190:56212',
            CURLOPT_PROXYTYPE => CURLPROXY_SOCKS4,
            CURLOPT_PROXYAUTH => CURLAUTH_BASIC,
        )
    );
    return $ch;
}

/**
 * Message sending
 * Send a response to telegram
 * @param $text Request text
 * @param $chat_id Dialogue id
 * @param $db Connection to the database
 *
 */
function message_to_telegram($text, $chat_id, $db){
    $ch = init();
    $text1 = 'Я не могу найти заказ с таким номером, пожалуйста, попробуйте еще раз';
    if($text == '/start'){
    	$text1 = 'Привет! Спасибо, что присоединились. Чтобы узнать, чем я могу вам помочь, введите команду "help"';
    }
    if($text == 'help' || $text == '/help' || $text == 'Help'){
    	$text1 = 'Чтобы узнать статус заказа, пожалуйста, введите номер заказа';
    }
    $result = mysqli_query($db, "SELECT * FROM order_table WHERE order_id='$text'");
    /**  Order data from the database */
	$data = mysqli_fetch_array($result);
	if(!empty($data['id'])){
		$status = $data['status'];
    		$result1 = mysqli_query($db, "SELECT * FROM status_description WHERE num='$status'");
            $data1 = mysqli_fetch_array($result1);
            if($data1['id']){
                $text1 = $data1['description'];
            } 
	} 
	/** Message text */
	$text = $text1;
    $data = array('chat_id' => $chat_id, 'text' => $text);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_exec($ch);
}