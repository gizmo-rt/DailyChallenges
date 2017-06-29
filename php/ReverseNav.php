<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 9/6/17
 * Time: 12:55 AM
 *
 * https://codefights.com/challenge/CBiayArRfZEyDDGX8
 *
 * Input: d: "^-^+^-^+^<^>^<^>^-^+^^"
 * Expected Output: [-12, 0, 0]
 *
 * Input: d: "---<"
 * Expected Output:[0, -1, -3]
 *
 * Input: d: ">"
 * Expected Output: [0, 1, 0]
 *
 */

//shortest solution
//return [($x = count_chars($d))[118] - $x[94], $x[62] - $x[60], $x[43] - $x[45]];


function Nav($d) {
    $x = count_chars($d,1);
    $m[0] = $x[118] - $x[94];
    $m[1] = $x[62] - $x[60];
    $m[2] = $x[43] - $x[45];

    return $m;
}

print_r(Nav('^'));