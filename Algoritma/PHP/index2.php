<?php

function maxAdjacentProduct($array) {
    $maxProduct = PHP_INT_MIN;
    

    for ($i = 0; $i < count($array) - 1; $i++) {
        $product = $array[$i] * $array[$i + 1];
        
        if ($product > $maxProduct) {
            $maxProduct = $product;
        }
    }
    
    return $maxProduct;
}

$array1 = [3, 6, -2, -5, 7, 3];
echo "Hasil maksimum: " . maxAdjacentProduct($array1) . "\n"; 

$array2 = [5, 1, 2, 3, 1, 4];
echo "Hasil maksimum: " . maxAdjacentProduct($array2) . "\n";

$array3 = [-1, -2];
echo "Hasil maksimum: " . maxAdjacentProduct($array3) . "\n";
