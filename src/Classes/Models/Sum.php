<?php
/**
 * @file
 * Page containing the class
 */
namespace App\Models;
/**
* Сlass to perform calculations
*/
class Sum
{
/**
* Function for calculating the value of goods
* @param $price The total cost
* @param $pr Unit price
* @param $count Amount
*
* @return The total cost
*/
    public function add($price, $pr, $count)
    {
    	$numargs = func_num_args();
    	if($numargs>3 || !(is_numeric($price)) || !(is_numeric($pr)) || !(is_numeric($count))){
    		return NULL;
    	} else {
	    		$all = $pr * $count;
		        $price += $all;
	        return $price;
    	}
   
    }
}