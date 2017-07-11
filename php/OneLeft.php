<?php
/**
 * User: pawan
 *
 * https://codefights.com/challenge/Y7RAnE4xmuyb4KkcB
 *
 */

function oneLeft($s) {
    for($i=0;$i<strlen($s);$i++)
        $t.=lvxswdfguhjknbiopearycqztm[ord($s[$i])-97];
    return $t;
}

$f = 'abc';
print oneLeft($f);