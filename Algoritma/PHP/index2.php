<?php

function resultMaxValue($data) {
    $maxValue = PHP_INT_MIN;
    

    for ($i = 0; $i < count($data) - 1; $i++) {
        $value = $data[$i] * $data[$i + 1];
        
        if ($value > $maxValue) {
            $maxValue = $value;
        }
    }
    
    return $maxValue;
}

$data1 = [3, 6, -2, -5, 7, 3];
echo "Hasil maksimum: " . resultMaxValue($data1) . "\n"; 

$data2 = [5, 1, 2, 3, 1, 4];
echo "Hasil maksimum: " . resultMaxValue($data2) . "\n";

$data3 = [-1, -2];
echo "Hasil maksimum: " . resultMaxValue($data3) . "\n";
