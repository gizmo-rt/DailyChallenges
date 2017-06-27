<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 30/5/17
 * Time: 4:35 PM
 *
 * Question:
 *
 *
 *
 * Input:
 * 5 3
 * banana
 * anana
 * nana
 * akela
 * kela
 * 4 1 2 3 4
 * 3 1 3 5
 * 3 1 4 5
 *
 */

function processData()
{
    $fin = fopen('input.txt', 'r');
    $fout = fopen('output.txt', 'w');
    $inQ = explode(" ", trim(fgets($fin)));
    $processArr = array();
    for ($i = 0; $i < $inQ[0]; $i++) {
        $processArr[] = trim(fgets($fin));
    }
    for ($j = 0; $j < $inQ[1]; $j++) {
        $queryStream = explode(" ", trim(fgets($fin)));
        $result = findMax($processArr, $queryStream) . "\n";
        fwrite($fout, $result);
    }
    fclose($fin);
    fclose($fout);
}

function findMax($processData, $queryStream)
{
    $querySet = array();
    $setLength = -1;
    $count = -1;
    for ($i = 1; $i <= $queryStream[0]; $i++) {
        $querySet[++$setLength] = $processData[$queryStream[$i] - 1];
    }
    $strChek = implode(",",$querySet).",";
    $tempCount = 0;
    for ($k = 0; $k <= $setLength; $k++) {
        $exp = '/' . $querySet[$k] . ',/';
        preg_match_all($exp,$strChek,$matches);
        $tempCount = count($matches[0]);
        if ($tempCount > $count)
            $count = $tempCount;
    }
    return $count;
}


processData();