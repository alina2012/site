<?php

namespace App\Models;

class Sum
{
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