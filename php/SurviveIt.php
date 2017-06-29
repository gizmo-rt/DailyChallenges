<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 15/6/17
 * Time: 9:33 PM
 *
 * https://codefights.com/challenge/Bw63XoZg24SpfJtcR
 *
 */

function surviveIt($s) {
    return 1 << log($s,2);
}

print surviveIt(10000);