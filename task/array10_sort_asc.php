<?php

    // Task generate array10 with digits (0-1000)
    // sort array with cusom func by ASC (BubbleSort)
    // echo array before and after

    $lenth = 10;
    
    $allDigits = generateArray( $lenth, 0, 1000);
    echoArray($allDigits);
    
    for ($i = 0; $i < count($allDigits); $i++) {
        $tmp = 0;
        for ($j = 0; $j < count($allDigits); $j++) {
            if($allDigits[$i]<$allDigits[$j]){
                $tmp = $allDigits[$j];
                $allDigits[$j] = $allDigits[$i];
                $allDigits[$i] = $tmp;
            }
        }
    }
    
    echo '<br>';
    echoArray($allDigits);    