<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 13/7/17
 * Time: 9:39 PM
 */

function findArrayPivot($low,$high,$input){
    if($low>$high)
        return -1;

    if($low==$high) {
        return $low;
    }

    $mid = (($low+$high)/2) | 1;

    if($mid<$high && $input[$mid]>$input[$mid+1])
        return $mid;

    if($low < $mid && $input[$mid-1]>$input[$mid])
        return $mid-1;

    if($input[$low]>=$input[$mid]){
        return findArrayPivot($low,$mid-1,$input);
    }
    return findArrayPivot($mid+1,$high,$input);
}

function processData($input,$key){

    $l = count($input);

    $pivot = findArrayPivot(0,$l-1,$input,$key);
    $status=0;
    if($pivot !=-1) {
        if ($input[0] > $key) {
            $status = doBinarySearch($pivot + 1, $l - 1, $input, $key);
        } elseif ($input[$pivot] == $key) {
            $status = 1;
        } else {
            $status = doBinarySearch(0, $pivot - 1, $input, $key);
        }
    }else{
        $status = doBinarySearch(0,$l-1,$input,$key);
    }

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

$dataList = array(7,8,9,4,5,6);
$searchFor = 6;
processData($dataList,$searchFor);