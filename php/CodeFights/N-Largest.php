<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 17/5/17
 * Time: 1:27 PM
 *
 * Find nth largest number in array of size M.
 */

function find($arr, $n)
{

    $count = 0;
    $length = $n;
    while ($length > 0 && count($arr) > 0) {

        if ($count < $n) {
            $p[] = max($arr);
            $arr = array_diff($arr,$p);
            //$index = array_search($p, $arr);
            //unset($arr[$index]);
            $length--;
            $count++;
        } else {
            break;
        }
    }

    if ($count == $n) {
        print $p[$n-1];
    } else {
        print "Element not found";
    }

}

$a = [9, 7,7,6, 8];

find($a, 4);