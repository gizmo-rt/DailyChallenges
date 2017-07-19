<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 13/7/17
 * Time: 9:29 PM
 */


function processData($input,$key){

    $l = count($input);

    $status = doBinarySearch(0,$l-1,$input,$key);

    if($status==1){
        print "Element found";
    }
    else{
        print "Element not found";
    }
}

function doBinarySearch($low,$high,$input,$key){
    if($low>$high)
        return -1;

    if($low==$high){
        if($input[$low]==$key){
            return 1;
        }
        else{
            return 0;
        }
    }

    $mid = (($low+$high)/2) | 1;

    if($key==$input[$mid]){
        return 1;
    }
    if($key > $input[$mid])
        return doBinarySearch($mid+1,$high,$input,$key);

    if($key<$input[$mid])
        return doBinarySearch($low,$mid-1,$input,$key);
}

$dataList = array(4,5,6,7,8);
$searchFor = 3;
processData($dataList,$searchFor);
