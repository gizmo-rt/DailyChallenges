<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 22/6/17
 * Time: 12:27 PM
 */

function calendar($m, $y) {

    $s = date('w',mktime(0,0,0,$m,1,$y));
    for($i=0;$i<42;$i++)
        $r[$i/7][$i%7] = $i>=$s && $i<$s+cal_days_in_month(0,$m,$y) ? ++$k:0;
    return $r;

}

$month = 6;
$year = 2017;

print_r(calendar($month, $year));