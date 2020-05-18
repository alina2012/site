<?php
namespace App\Models;
require_once("./bd.php");
class DB
{
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