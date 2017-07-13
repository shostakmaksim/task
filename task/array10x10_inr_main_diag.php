<?php

    // Task generate array10x10 with digits (0-1000)
    // all elements of main diagonal increase to mirror element of secondary diagonal
    // echo array before and after

    $row = 10;
    $col = 10;
    $allDigits = generateArray2D( $row, $col, 0, 1000);
    echoArray2DinGrid($allDigits);
    
    for ($i = 0; $i < $row; $i++) {
        $allDigits[$i][$i] += $allDigits[$i][($row-$i)-1];
    }
    
    echo '<br>';
    echoArray2DinGrid($allDigits);    