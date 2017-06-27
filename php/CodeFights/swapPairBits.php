<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 29/5/17
 * Time: 11:13 AM
 * For k = 565, p1 = 9 and p2 = 3, the output should be swapPairBits(k, p1, p2) = 817.
 *
 */


/**
 * Swap bits method 1
 * @param $k
 * @param $a
 * @param $b
 * @return int
 *
 */
//function swapPairBits($n, $x, $y) {
//
//    $c = pow(2 ,--$x) ^ pow(2,--$y);
//    $m = $n &$c ? $c : 0;
//    $n = $n^$m;
//    return $n;
//}

/**
 * Swap bits method 2
 * @param $k
 * @param $a
 * @param $b
 * @return int
 *
 */
//function swapPairBits($n, $x, $y) {
//    $c = (1<<--$x)^(1<<--$y);
//    $m = $n &$c ? $c : 0;
//    return $n^$m;
//}

/**
 * Swap bits method 3
 * @param $k
 * @param $a
 * @param $b
 * @return int
 *
 */
function swapPairBits($k, $a, $b) {

    $c = (1<<--$a)^(1<<--$b);
    $m = $k &$c ? $c : 0;
    return $k ^ $m;
}


print swapPairBits(565,9,3);