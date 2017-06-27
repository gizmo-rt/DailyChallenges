<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 11/6/17
 * Time: 2:58 PM
 *
 * https://codefights.com/challenge/Bj4AAcrgFQZPv58uW
 *
 * Solution 1:
 * Take each row
 * 1. Move element at row[i][j] up or down
 * Check only elements in down,as once you check down then automatically up cases are also being checked.
 * Check following criteria
 * 1.a. Check  row[i][j],row[i][j+1],row[i][j+2]  // right
 *   b. Check  row[i][j],row[i][j-1],row[i][j-2] // left
 *   c. Check  row[i][j],row[i-1][j],row[i-2][j] //up
 *   d. Check  row[i+1][j],row[i+1][j+1],row[i+1][j+2] //right
 *   e. Check  row[i+1][j],row[i+1][j-1],row[i+1][j-2] //left
 *   f. Check  row[i+1][j],row[i+2][j],row[i+3][j] //down
 * 2. Move element at row[i][j] left or right
 * * Check only elements in right,as once you check right then automatically left cases are also being checked.
 *   a. Check  row[i][j+1],row[i][j+2],row[i][j+3]  //right
 *   b. Check  row[i][j],row[i][j-1],row[i][j-2]  //left
 *   c. Check  row[i][j],row[i-1][j],row[i-2][j]  //upper half
 *   d. Check  row[i][j],row[i+1][j],row[i+2][j]  //lower half
 *   e. Check  row[i][j+1],row[i-1][j+1],row[i-2][j+1] //right upper half
 *   f. Check  row[i][j+1],row[i+1][j+1],row[i+2][j+1] //right lower half
 *
 *
 * Solution 2:
 * Exchange elements right and look for pattern 'RRR','GGG','BBB','OOO' in row,column and column+1, If found then return true
 * Exchange elements down  and look for pattern 'RRR','GGG','BBB','OOO' in row,row+1 and column.
 *
 *
 */

function candyCrush2($g, $c, $d) {

    $i=0;
    $r=0;
    $b = &$g[ $c[0] + ($d < 'E') - ($d > 'T') ][ $c[1] + ($d == 'R') - ($d == 'L')];
    $b = [$a = &$g[ $c[0] ][ $c[1] ], $a = $b][0];
    for (; $i < 101; )
        $r |= preg_match('/(.)\1\1/', join($g[+$i]) . X . join(array_column($g, +$i++)));
    return $r;
}


$gameboard = [['R','G','G','B'],
    ['B','O','G','G'],
    ['P','O','B','P'],
    ['Y','B','Y','O']];

$cell = [0, 1];
$direction = 'D';

candyCrush2($gameboard, $cell, $direction);