<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 21/6/17
 * Time: 7:47 PM
 */


function elections($k, $votes)
{
    print_r(findMAXDiff($votes));

//    $set = array();
//    $count=0;
//    $pos1=array_search('T',$votes);
//    $pos2 =0;
//    $max=0;
//    foreach ($votes as $key=>$value){
//        if($value == "T"){
//            $set[$key]=1;
//            $count++;
//            if($key != $pos1){
//                $pos2=$key;
//            }else{
//                if($pos2-$pos1 > $max){}
//            }
//        }
//
//    }
//
//    for($i=0;$i<$k;$i++){
//
//    }
}

function findMAXDiff($votes)
{
    $c = count($votes);
    $temp = '';
    $k = 0;
    $pos1 = 0;
    $pos2 = 0;
    $temp[$k++] = 0;
    foreach ($votes as $key => $value) {
        if ($value == 'T') {
            $temp[$k++] = $key;
        }
    }
    $temp[$k++] = $c;
    $diff = 0;
    for ($m = 1; $m < $k; $m++) {
        $t = $temp[$m] - $temp[$m - 1];
        if ($t > $diff) {
            $diff = $t - 1;
            $pos1 = $temp[$m - 1];
            $pos2 = $temp[$m];
        }
    }

    return array('a' => $pos1,
        'b' => $pos2
    );
}

$k = 2;
$votes = ["R","T", "R", "T", "R", "T", "R", "T", "T", "R", "T", "R", "T", "R", "T", "R", "T", "R", "T", "T", "T", "T"];

elections($k, $votes);