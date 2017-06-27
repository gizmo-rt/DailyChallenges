<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 24/6/17
 * Time: 2:53 PM
 */

function tellTime($time_str)
{

    $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    $hj = $f->format(1);

    $time = explode(":", $time_str);
    $hours = (int)$time[0];
    $minutes = (int)$time[1];
    $hour_mint = array("", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten",
        "Eleven", "Twelve");
    $mt = array(5 => "five",
        10 => "ten",
        20 => "twenty",
        25 => "twenty five",
        35 => "thirty five",
        40 => "forty",
        50 => "fifty",
        55 => "fifty five");


    if ($minutes > 32) {
        $a = $hour_mint[$hours%12 + 1];
    } else {
        $a = $hour_mint[$hours];
    }


    if (($minutes < 3) || ($minutes > 57)) {
        $time_name = $a . " o'clock";
    } else if (($minutes > 12) && ($minutes < 18)) {
        $time_name = "Quarter past " . $a;
    } else if (($minutes > 27) && ($minutes < 33)) {
        $time_name = "Half past " . $a;
    } else if (($minutes > 42) && ($minutes < 48)) {
        $time_name = "Quarter to " . $a;
    } else {
        $spt = str_split('' . $minutes);
        if (count($spt) > 1) {
            if ($spt[1] < 3) {
                $minutes = $spt[0] . '0';
            } else if ($spt[1] > 7) {
                $minutes = ($spt[0] + 1) . '0';
            } else {
                $minutes = $spt[0] . '5';
            }
        } else {
            if (($spt[0] > 2) && ($spt[0] < 8)) {
                $minutes = 5;
            } else {
                $minutes = 10;
            }
        }
        if ($minutes < 30) {
            $time_name = $mt[$minutes] . " past " . $a;
        } else {
            $time_name = $mt[$minutes] . " to " . $a;
        }
    }
    return "It's " . $time_name;
}

$time_str = "12:58";
print tellTime($time_str);