<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 11/7/17
 * Time: 12:02 PM
 * https://codefights.com/challenge/admES7uudjBkBNSB3
 *
 */

function fermactor($n) {
    $a = $n**.5|1;
    $b = 1.1;
    while((int)$b!=$b)
        $b = ($a++**2-$n)**.5;
    return [$a-1,$b];
}

$n=15;
print_r(fermactor($n));