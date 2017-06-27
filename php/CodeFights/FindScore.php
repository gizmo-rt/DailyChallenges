<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 25/6/17
 * Time: 3:35 PM
 */


function findScore($x, $y)
{

    $a = sqrt(pow($x, 2) + pow($y, 2));
    $x = abs($x);
    $y = abs($y);
    $a = ($x <= 1 && $x != 0) || ($y <= 1 && $y != 0) ? 11 - ceil($a * 10) : 10 - ceil($a);

    return $a;
}


$x = -0.615538218153;
$y = 0.951369166449;
print findScore($x, $y);


# https://codefights.com/challenge/ppAoHZP5np9v4w6K7
//function findScore($x, $y) {
//    return 11 - (10 * hypot($x, $y) ?: 1) | 0;
//}
