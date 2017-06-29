<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 26/6/17
 * Time: 4:29 PM
 *
 * https://codefights.com/challenge/PQ2ZtjHQcDC65wYhh
 *
 */

function ipinfo($ip) {

    $data = preg_split("/\//",str_replace('.','/',$ip));
    $subnetMask = str_pad(str_repeat('1',$data[4]),32,0,1);
    $temp='';
    for($i=0;$i<4;$i++){
        $temp.=str_pad(decbin($data[$i]),8,0,0);
    }
    $last_host = substr($temp,0,$data[4]).str_repeat('1',32-$data[4]);
    $a='';
    $b='';
    $x='';
    $y='';
    $c='.';
    $f='';
    $g='';
    $l='';
    $o='';
    $p='';
    $q='';
    for($i=0;$i<4;$i++) {

        if ($i > 2) {
            $c = '';
        }
        $t = substr($subnetMask, 8 * $i, 8);
        $u = str_pad(decbin($data[$i]), 8, 0, 0);
        $v = bindec($t);
        $a .= $u . $c;
        $b .= $data[$i] . $c;
        $x .= $t . $c;
        $y .= $v . $c;
        $o= substr($last_host, 8 * $i, 8);

        if ($i > 2) {
            $e = ($data[$i]& $v)+1;
            $k = $g .$e;
            $j = $f . str_pad(decbin($e), 8, 0, 0);
            $s = $p.($o-1).$c;
        }
        $g .= ($data[$i] & $v) . $c;
        $f .= $u & $t;
        $f .=$c;
        $p .= $o . $c;
        $d = $q.(bindec($o)-1);
        $q .= bindec($o).$c;
    }




    $r[0] = $a." ".$b;
    $r[1] = $x." ".$y;
    $r[2] = $f." ".$g;
    $r[3] = $j." ".$k;
    $r[4] = $s." ".$d;
    $r[5] = $p." ".$q;



    print_r($r);
}

$ip = "176.202.115.185/17";
ipinfo($ip);