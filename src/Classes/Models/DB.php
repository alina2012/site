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
}