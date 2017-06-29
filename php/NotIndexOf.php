<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 17/6/17
 * Time: 9:12 AM
 *
 * https://codefights.com/challenge/cvieRLS9ghHamb44t
 *
 */

function notIndexOf($g, $v) {
    $l = strlen($v);
    $m = strlen($g) - $l;
    $c=-1;
    for($i=0;$i<$m;$i++){
        for($j=0;$j<$l;$j++){
            if($g[$j+$i] == $v[$j])
                $s=1;
        }
        if(!$s)
            return $i;
        else
            $s=0;
    }
    return $c;
}


/**
 * Kov's solutions
 *
 * function notIndexOf($s, $v) {
 *   for (; strpos(X . (substr($s, $i++) ^ $v), 0); );
 *        return $s[--$i + strlen($v)] > "" ? $i : -1;
 * }
 *
 */


$givenString="abc";
$value= "123";

print notIndexOf($givenString,$value);