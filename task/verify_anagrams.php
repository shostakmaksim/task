<?php

    // Task set two words
    // verify them on able to be anagrams
    // trim and 
    // return true or false

$word_1 = 'dog';
$word_2 = 'god';

// prepare data
$word_1 = strtolower(trim($word_1));
$word_2 = strtolower(trim($word_2));

// sort string
$word_1 = str_sort($word_1);
$word_2 = str_sort($word_2);

// check if words has same lenth
if (strlen($word_1) == strlen($word_2)){
    // compare strings
    if (strcmp($word_1, $word_2) == 0){
        echo 'This words are anograms';
    } else {
        echo 'This words are not anograms';
    }
} else {
    echo 'This words are not anograms';
}

function str_sort($string){
    $stringParts = str_split($string);
    sort($stringParts);
    return implode('', $stringParts);
}