<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 20/6/17
 * Time: 11:47 PM
 */

//place at odd or even position and predict output
function elections($k, $votes)
{
    $n = count($votes);
    $x = count_chars(implode("", $votes), 1);
    $i = 0;
    $sub=0;
    $sum = 0;

    if ($k >= $x[82]) {
        $i = $x[82]+$x[84];
    } else {
        if($x[82] < $x[84]){
            $i = $x[82]+$x[84];
            $sub = $x[82] - $k;
        }else{
            if(!array_key_exists(84,$x)){
                if($k&1){
                    $i = $k;
                    $sub = 0;
                }
                else{
                    $i = 2*$k;
                    $sub = $k;
                }
            }
            else{
                if($x[84]&1){
                    $i = $x[84]+2*$k;
                    $sub = $k;
                }else{
                    $i = $x[84]+2*$k;
                    $sub = $k;
                }
            }

        }
    }
    while ($n) {
        if ($i < $n) {
            $sum += $i;
            $i++;
        } else {
            $sum += $n;
            $i--;
        }
        $n--;
    }

    return $sum-$sub;
}


$k = 2;
$votes = ["R","R","R","R","R","R","R","T","R","R","R","R","R","R","R","R","R","R","R","R","R","R"];


print elections($k, $votes);