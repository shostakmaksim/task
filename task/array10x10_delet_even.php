<?php
    // Task generate array10x10 with digits (0-1000)
    // delete all even
    // echo array before and after 
    
    $row = 10;
    $col = 10;
    $allDigits = generateArray2D( $row, $col, 0, 1000);
    echoArray2DinGrid($allDigits);
    
    for ($i = 0; $i <  $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            if($allDigits[$i][$j]%2 == 0){
                unset($allDigits[$i][$j]);
            }
        }
    }
    
    echo '<br>';
    echoArray2DinGrid($allDigits);      