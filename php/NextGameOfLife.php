<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 19/7/17
 * Time: 3:29 PM
 *
 * https://codefights.com/challenge/J9tdW6Fo7FiHmsqk4
 *  
 */


function nextGameOfLife($s)
{
    $w = count($s);
    $l = count($s[0]);
    $r = array();
    for ($i = 0; $i < $w; $i++) {
        for ($j = 0; $j < $l; $j++) {
            $t = 0;
            $t += (($i - 1 > -1) && ($j - 1 > -1)) && $s[$i - 1][$j - 1] ? 1 : 0;
            $t += (($i - 1 > -1) && ($j + 1 < $l)) && $s[$i - 1][$j + 1] ? 1 : 0;
            $t += (($i + 1 < $w) && ($j + 1 < $l)) && $s[$i + 1][$j + 1] ? 1 : 0;
            $t += (($i + 1 < $w) && ($j - 1 > -1)) && $s[$i + 1][$j - 1] ? 1 : 0;
            $t += ($i - 1 > -1) && $s[$i - 1][$j] ? 1 : 0;
            $t += ($i + 1 < $w) && ($s[$i + 1][$j] == 1) ? 1 : 0;
            $t += ($j - 1 > -1) && ($s[$i][$j - 1] == 1) ? 1 : 0;
            $t += ($j + 1 < $l) && $s[$i][$j + 1] ? 1 : 0;
            $r[$i][$j] = ($s[$i][$j]) && (($t == 3) || ($t == 2)) ? 1 : (!$s[$i][$j] && $t == 3 ? 1 : 0);
        }
    }

    return $r;
}


$seed = [[0, 1, 0],
    [0, 1, 0],
    [0, 1, 0]];

print_r(nextGameOfLife($seed));