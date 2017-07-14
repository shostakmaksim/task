<?php

    // Task get longest word of paragraph
    // return all longest words

    $lorem = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry';
    $words = explode(' ', $lorem);
    
    $longestWords = getLongestStrings($words);
    
    echo echoArray($longestWords);
    
    function getLongestStrings($array){
        
        // find max lenth
        $maxLenth = 0;
        for ($i = 0; $i < count($array); $i++) {
            if(strlen($array[$i])>=$maxLenth){
                $maxLenth = strlen($array[$i]);
            }
        }
        
        // store max lenth words
        $words = array();
        for ($i = 0; $i < count($array); $i++) {
            if(strlen($array[$i])== $maxLenth){
                array_push($words, $array[$i]);
            }
        }
                
        return $words;
    }