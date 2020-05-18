<?php
/**
 * @file
 * Page containing the class
 */
namespace App\Models;
require_once("./bd.php");
/**
* Сlass for working with the database
*/
class DB
{
  /**
  * Function for retrieving records from a database
  * @param $db Db connection
  * @param $table_name Table name
  * @param $param Parametr
  * @param $key Parametr value
  * @param $what Desired value
  *
  * @return Record from database
  */
    public function getRecord($db, $table_name, $param,$key, $what = NULL){ 
    	$numargs = func_num_args();
      if($numargs > 5){
        return NULL;
      } else {
        $text = "SELECT * FROM ";
        $text2 = " WHERE ";
        $text3 = " = '";
        $text4 = "'";
        $text = $text.$table_name.$text2.$param.$text3.$key.$text4;
        $res = mysqli_query($db,  $text);
        if(!$res){
          return NULL;
        } 
        $data = mysqli_fetch_array($res);
        if($what != NULL){
          
          $name = $data[$what];
          return $name;
        }
        else {
          return $data;
        }
      }
    }
  /**
  * Function to add an entry to the Bot_mes table
  * @param $db Db connection
  * @param $chat_id User chat ID
  * @param $update_id The number of the last processed request
  * @param $text Message text
  *
  * @return FALSE or TRUE
  */
    public function insertRecordintoBot_mes($db, $chat_id, $update_id, $text)
    { $numargs = func_num_args();
      if($numargs > 4){
        return FALSE;
      }
      $record = mysqli_query($db, "INSERT INTO bot_mes (chat_id, update_id, text_mes) VALUES ('$chat_id','$update_id', '$text')");
        return $record;
    }
  /**
  * Function to add an entry to the users table
  * @param $db Db connection
  * @param $name User name
  * @param $login User email
  * @param $salt HASH salt
  * @param $password User pessword
  * @param $token Authorization token
  * @param $phone User phone
  *
  * @return FALSE or TRUE
  */
    public function insertRecordintoUsers($db, $name, $login, $salt, $password, $token, $phone)
    { $numargs = func_num_args();
      if($numargs > 7){
        return FALSE;
      }
      $record = mysqli_query($db, "INSERT INTO users (name, login, salt, password, token, phone) VALUES ('$name','$login', '$salt', '$password', '$token', '$phone')");
        return $record;
    }
  /**
  * Function to add an entry to the order_table table
  * @param $db Db connection
  * @param $order_id Order ID
  * @param $email User email
  * @param $my_json Order list
  *
  * @return FALSE or TRUE
  */
    public function insertRecordintoOrder_table($db, $order_id, $email, $my_json)
    { $numargs = func_num_args();
      if($numargs > 4){
        return FALSE;
      }
      $result = json_decode($my_json);
      if (json_last_error() === JSON_ERROR_NONE) {
          $record = mysqli_query($db, "INSERT INTO order_table (order_id, email, composition, status) VALUES ('$order_id','$email', '$my_json', 1)");
        return $record;
      } else {
        return FALSE;
      }
    }
}