<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 18/6/17
 * Time: 12:16 AM
 *
 * https://codefights.com/challenge/8wnEp7GjPotzJ7uZq
 *
 * 1st order differentiation
 *
 */


function derivative($a, $x)
{
    $p = str_replace(" ","",$a);
    foreach (preg_split("/( - | \+ )/", $a) as $i=>$y) {
        $t = preg_split("/[*^]/", $y);
        $c = count($t);
        if ($c == 1)
            $v = $t[0] == "x" ? 1:0;
        if ($c == 2) {
            if ($t[0] == "x") {
                $v = $t[1] * pow($x, $t[1] - 1);
            } elseif ($t[0] == "-x") {
                $v = -($t[1] * pow($x, $t[1] - 1));
            } else {
                $v = $t[0];
            }
        }
        if ($c == 3)
            $v = $t[0] * $t[2] * pow($x, $t[2] - 1);

        $r+= $i ?$p[$l++] == "-"?-$v:$v:$v;
        $l+=strlen($y);
    }
    return (int)$r;
}

$fx = "3*x^2 - x^4 + 8";
$x = -2;

print_r(derivative($fx, $x));