<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 1/6/17
 * Time: 10:54 AM
 */

function onesPosition($num) {
    $k = decbin($num);
    $count = substr_count($k,'1');
    $list=array(0,1,2);
    $t=3;
    $m=-1;
    if($count<=2)
        return $list[$count];
    for($i=3;$i<$num;$i+=2){
        if(is_Prime($i)){
            $m = $i;
            $t++;
        }
        if($t == $count+1)
            break;
    }
    return $m;
}


function is_Prime($m)
{
    $status = 1;
    for ($i = 2; $i < $m; $i++) {
        if ($m % $i == 0) {
            return false;
        }
    }
    return true;
}

print onesPosition(21);

