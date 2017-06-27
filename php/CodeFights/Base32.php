<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 23/6/17
 * Time: 12:41 AM
 */

function base32($n)
{
    $r='';
    do{
        $t = $n % 32;
        $n =$n/32;
        $t += $t>15?($t+1>21?2:1):0;
        $c = $t<8?50:57;
        $r= chr($c+$t).$r;
    }while ($n>=1) ;
    return $r;
}

$num = 1000;

print base32($num);