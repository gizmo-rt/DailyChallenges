<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 9/6/17
 * Time: 11:26 PM
 *
 * Given an integer n, return the smallest integer a, such that a is a square of some integer and is greater than n.
 *
 * Example
 * For n = 5, the output should be
 * nextSquare(n) = 9.
 *
 * n= 9 output=16
 *
 */



function nextSquare($n) {

    $m = ($n >> 2) + 1;
    return pow($m,2);

//    return pow(floor(sqrt($n)+1),2);
}

print nextSquare(9);


