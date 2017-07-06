<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 30/6/17
 * Time: 9:28 AM
 */

function factoror($s) {
    $r = [];
    foreach ($s as $c => $n)
        for ($p = 0;$p != $n; $n = $n > 1 ? $n + $t : $t, $t = 0 * $r[$c]++)
            for ($i = 1, $p = $n; ++$i *$i <= $n; $t += $i * $j)
                for ($j = 0; $n % $i < 1; $j++)
                    $n /= $i;

    return $r;
}


$s = [14];
factoror($s);