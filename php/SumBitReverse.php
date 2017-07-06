<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 2/7/17
 * Time: 1:21 PM
 */


function sumBitReverse($n) {

    $z = count($n);
    $d=array($n);
    for($i=0;$i<$z;$i++){
        for($j=0;$j<$z;$j++){
            $r[$i][$j]=0;
        }
    }
    foreach($n as $k=>$p){
        $d[$k] = ltrim(strrev(decbin($p)), '0');
        $m = strrev($d[$k].'0');
        $r[$k][$k]= floatval(sprintf("%.0f",bindec($m)));
    }

    for($i=0; $i<$z;$i++){
        for($j=0; $j<$z;$j++){
            $v = sprintf("%.0f",bindec(strrev(decbin(bindec($d[$i])+bindec($d[$j])))));
            $r[$i][$j] = floatval($v) ;
        }
    }
    return $r;
}


$n = [1283116999481424, 1253014717821278, 1995979509201897, 1763397420393372, 2235831148491066, 1531515890380172, 1631089544639246, 1722362058017368, 348246703920387, 1785370105761950];

print_r(sumBitReverse($n));