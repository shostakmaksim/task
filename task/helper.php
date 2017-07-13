<?php

/* 
 * This file contanes some func
 * to improve codding for this task set
 */

function generateArray($lenth, $min, $max){
    $array = array();
    for ($i = 0; $i < $lenth; $i++) {
        $array[$i] = rand($min, $max);
    }

    return $array;
}

function echoArray($array){
    foreach ($array as $value) {
        echo "$value ";
    }
}

// Array of 2D generator
function generateArray2D($rows, $cols, $min, $max){
    $array = array();
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $array[$i][$j] = rand($min, $max);
        }
    }

    return $array;
}

// Echo 2D array
function echoArray2DinGrid($array){
    foreach ($array as $row) {
        foreach ($row as $value) {
            echo "$value ";
        }
        echo "<br>";
    }
}

function getProgresArif($start, $lenth, $step=1){
    $array = array();
    array_push($array, $start);
    
    for ($i = 1; $i < $lenth; $i++) {
        $start += $step;
        array_push($array, $start);
    }
    return $array;
}
