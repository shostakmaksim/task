<?php

    // Task generate array50 digits(0, 100)
    // get count of exetc digit
    // even if it is a part of other number
    // echo array and count of digit

    $array = generateArray(50, 0, 100);
    echoArray($array);
    
    $count = 0;
    $needle = 3;
    
    for ($i = 0; $i < count($array); $i++) {
        $count += getCountDigitInNumber($needle, $array[$i]);
    }
            
    echo '<br>';
    echo "Array has $count matches of digit $needle";
    
    function getCountDigitInNumber($digit, $number){
        $count = 0;
        
        // process number, while it consist of two or more digits
        while ($number/10>1) {
            $last = $number%10;
            $number = intval($number/10);
            
            if($last===$digit){
                $count++;
            }
        }
        
        // process last digit of number
        if($number===$digit){
            $count++;
        }
        
        return $count;
    }