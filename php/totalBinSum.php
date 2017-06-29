<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 24/5/17
 * Time: 9:52 AM
 *
 * Program to create binary sum of n-bit numeral with modulo value 1e9+7
 */

function totalBinSum($num)
{
    $val = 0;
    $k = 0;
    $t1 = 0;
    $q = 17;
    foreach (str_split($num) as $ch) {
        $t1 = (2 * $t1 + $ch) % $q;
        $val += $t1;
        $k++;
    }
    return $val % $q;
}

print "Modulo final value=".totalBinSum("1011");
