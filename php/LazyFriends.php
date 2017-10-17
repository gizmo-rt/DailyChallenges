<?php
/**
 * Created by PhpStorm.
 * User: pawanrajmurarka
 * Date: 17/10/17
 * Time: 11:14 AM
 */


function lazyFriends($houses, $maxDist)
{
    for ($i = 0; $i < count($houses); $i++) {
        $min = $houses[$i] - $maxDist;
        $max = $houses[$i] + $maxDist;
        $result[] = findCount($min,$max,$houses);
    }
    return $result;
}

function findCount($min,$max,$houses){
    $count=-1;
    foreach ($houses as $house){
        if($house>=$min && $house<=$max){
            $count++;
        }
    }
    return $count;
}

$houses = [1, 2, 4, 8, 10];
$maxDist = 5;
print_r(lazyFriends($houses, $maxDist));