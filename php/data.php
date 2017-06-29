<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 17/5/17
 * Time: 12:37 AM
 */

function ReversesreveR($s) {

    $k = preg_split("/[+,\-,\/,*,%,^]/",$s);

    $a = (int)strrev($k[0]);
    $b = (int)strrev($k[1]);

    $op = substr($s,strlen($k[0]),1);

    $j = $a.$op.$b;

    $j = $op == '^'?pow($a,$b):($op == '/' ? intdiv($a,$b):$j);
    eval('$r = '.$j.';');
    return $r;

    // $m = $op == '+'? $a+$b :($op == '-' ?$a-$b:($op == '*'?$a*$b:($op == '%'?$a%$b:($op == '/'? intdiv($a,$b): pow($a,$b)))));

//  return $m;

}
