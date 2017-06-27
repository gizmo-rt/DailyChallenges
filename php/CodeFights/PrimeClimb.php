<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 18/6/17
 * Time: 11:01 PM
 */

function primeClimb($n) {
    $j = 1;
    $i=2;
    $m=0;
//    while ($j++ <= sqrt($n))
//        if ($n % $j == 0)
//            $i=2;
//
//
//    if(!$i)
//        return ''.$n;

    while($n != 1){
        if($n%$i ==0){
            $n/=$i;
            $k=$i;
            $v++;
            $m=1;
        }
        else{
            if(!$m && ($i > sqrt($n))){
                $r=$n;
                break;
            }
            $r.=$k?$k.($v>1?$v:''):'';
            $v=0;
            $k=0;
            $i++;
        }
    }
    $r.=$k?$k.($v>1?$v:''):'';
    return $r;
}


print primeClimb(2147483647);