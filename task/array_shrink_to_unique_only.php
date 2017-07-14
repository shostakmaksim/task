<?php

    // Task generate array50 digits (10-99)
    // delet all unique values
    // echo array before and after

    $array = generateArray(50, 10, 99);
    echoArray($array);
    $repeatBase = array();
    
    for ($i = 0; $i < count($array); $i++) {
        $isUniq = FALSE;
        
        for ($j = 0; $j < count($array); $j++) {
            
            // check if algorithm compare same indexes
            if($i==$j){
                continue;
            }
            // check if current value allready is not Unique
            if (array_search($array[$i], $repeatBase) != FALSE){
                $isUniq = FALSE;
                break;
            }
            
            // proccess Uniq
            if($array[$i]!=$array[$j]){
                $isUniq = TRUE;
            } 
            // proccess NOT Uniq
            else{
                array_push($repeatBase, $array[$i]);
                $isUniq = FALSE;
                break;
            }
            
        }
        
        // set to 00
        if($isUniq){
//            $array[$i] = '00';
            unset($array[$i]);
//            how to implement via array_slice
//            array_slice($array, $i, 2);
        }
        
    }
    
    echo '<br>';
    echoArray($array);