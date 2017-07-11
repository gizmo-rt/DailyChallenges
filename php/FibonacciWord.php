<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 9/7/17
 * Time: 1:38 AM
 *
 * https://codefights.com/challenge/mLWJWiwBHTzg8MSxc
 *
 */

function fibonacciWord($n, $p)
{

    $s = $n ? '1' : '0';
    $a = '0';
    $b = '1';
    $i = 2;

    while ($i <= $n) {
        $s = $b . $a;
        $a = $b;
        $b = $s;
        $i++;

    }

    $l = strlen($p);
    $c = 0;
    $t = 7;
    $s='X'.$s;
    $j=0;
        while ($t) {
            $t = strpos($s, $p,$j);
            if ($t) {
                $c++;
                $j=$t+1;
            }
        }
    print "Count Value = " . $c . "\n";

}

$n = 40;
$p = "0";
fibonacciWord($n, $p);

//By ANON
//function fibonacciWord($n, $p) {
//    $x = !$p;
//    $y = 1 . $p == 11;
//    $a = 0;
//
//    for ($l = strlen($p) - $b = 1; --$n; $b .= $a, $a = $t)
//        $y = !!strpos( $l ? a . substr($t = $b, -$l) . substr($a, 0, $l) : a, $p) + $x + $x = $y;
//
//    return +$y;
//}
