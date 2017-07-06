<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 6/7/17
 * Time: 1:21 PM
 * https://codefights.com/challenge/FGWntJmJm2ErFuv9u
 */

function lucas($p, $q, $n) {
    return [l($p,$q,$n,$n<1?0:1,0,1),l($p,$q,$n,$n<1?2:$p,2,$p)] ;
}

function l($p,$q,$n,$u,$a,$b){
    while($n>1){
        $u= $p*$b-$q*$a;
        $a = $b;
        $b=$u;
        $n-=1;
    }
    return $u;
}

print_r(lucas(12,5,9));