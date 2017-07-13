<?php

    // Task pow digits with 5 at the end
    // using custom func
    // echo result standart and custom func

    $array = getDigitsLast5();
    
    for ($i = 0; $i < count($array); $i++) {
        echo "Squaring $array[$i]: ".
                'stand func = '.pow($array[$i], 2).' '.
                'magic func = '.powLast5($array[$i]).
                '<br>';
    }
    
    // Custom pow 2 func
    function powLast5($digit){
        
        if($digit%5 == 0){
            $part = intval($digit/10);
            $part *=$part+1;
            $part *= 100;
            $part += 25;
            
            return $part;
        } else {
            return FALSE;
        }
    }
    
    // Generate aray of all digit last on 5 from 5 to 1000
    function getDigitsLast5(){
       $array = array();
       
       for ($i = 5; $i < 1000; $i+=10) {
           array_push($array, $i);
       }
       return $array;
   }
    