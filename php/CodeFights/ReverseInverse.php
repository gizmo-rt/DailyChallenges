<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 8/6/17
 * Time: 8:18 AM
 */


function reverseInverse($s)
{
    $temp = str_split(strtolower($s));
    $f='';
    $c = '';
    foreach ($temp as $t){
        $q = ord($t);
        if(($q > 96 && $q < 123 )||($q>47 && $q<58)){
            $c .=$t;
        }
        else {
            $f .= strrev($c) . $t;
            $c = '';
        }
    }

    for($i=0;$i<strlen($s);$i++){
        $q = ord($s[$i]);
        if($q>96 && $q<123)
            $f[$i] = chr(ord($f[$i])-32);
    }
    return $f;
}

# "3 SYAD OT OG. tEG RUOY 001 SEGAMI ROF $001."

print reverseInverse("3 days to go. Get your 100 images for $100.");