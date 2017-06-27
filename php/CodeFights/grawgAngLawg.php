<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 14/6/17
 * Time: 1:31 AM
 *
 * https://codefights.com/challenge/YapP4jc9KPYq9RA5s
 *
 */
function grawgAndLawg($orders) {
    $d = array('N' => 'E',
        'L' => "\xc6\x8e",
        'F' => "\xc2\xa3",
        'C' => "F"
    );
    $n = array('S' => "-",
        'M' => "=",
        'G' => "\xe2\x89\xa1",
    );
    $result = array();
    foreach ($orders as $c) {
        $y = 0;
        $st = '';
        foreach ($d as $t => $u) {
            $x = strrpos($c, $t);
            if ($x > $y) {
                $y = $x;
                $p = $u;
                $st = $t;
            }
        }
        $y = 0;
        $g = '';
        foreach ($n as $t => $u) {
            $x = strrpos($c, $t);
            if ($x > $y) {
                $y = $x;
                $g = $u;
            }
        }
        $m = array_filter(explode(",", preg_replace("/[^0-9,.]+/", ",", $c)));
        krsort($m);
        $times = reset($m);
        $h = str_repeat($g, $times);
        if (substr_count($c, 'T') > 0) {
            if ($st == 'L') {
                $tr = $p . $h . ' ==<o~';
            } else {
                $tr = '~o>== ' . $h . $p;
            }
        } else {
            $tr = $h . $p;
        }
        $result[] = $tr;
        $p='';
    }
    return $result;
}

$orders = ["TFS6","T3TFB15NFCFFFCNMGLLGFLTTMGTSTT"];

$data = grawgAndLawg($orders);

print_r($data);


?>
