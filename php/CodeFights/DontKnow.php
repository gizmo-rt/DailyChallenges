<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 27/6/17
 * Time: 5:32 PM
 *
 * # https://codefights.com/challenge/xAfWeNKqLqeerhKXy
 */

function iDontKnow($n) {
    return number_format($n*($n-1), 0, '', '');
}

$number = '999999999';
print iDontKnow($number);
