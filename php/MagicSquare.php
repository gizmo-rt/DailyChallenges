<?php
/**
 * https://codefights.com/challenge/DACX76NXCaJmAQta3
 *
 * Created by PhpStorm.
 * User: pawan
 * Date: 27/6/17
 * Time: 11:04 PM
 */

function magicSquare3by3($n) {
    sort($n);
    return $n[1] + $n[5] + $n[6] == array_sum($n) / 3;
}


$n = [-319, 528, 73, 486, -298, 94, 115, -340, 507];
magicSquare3by3($n);