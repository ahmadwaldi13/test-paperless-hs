<?php

function calculateNeededStatues($statues) {
    sort($statues);
    
    // Inisialisasi variabel
    $neededStatues = 0;
    
    // Menghitung jumlah patung yang diperlukan
    for ($i = 0; $i < count($statues) - 1; $i++) {
        // Menghitung selisih antara dua patung bertetangga
        $difference = $statues[$i + 1] - $statues[$i];
        
        // Jika selisih lebih dari 1, hitung patung yang diperlukan
        if ($difference > 1) {
            $neededStatues += ($difference - 1);
        }
    }
    
    return $neededStatues;
}

// Contoh penggunaan
$statues1 = [6, 2, 3, 8];
echo "Jumlah patung yang diperlukan: " . calculateNeededStatues($statues1) . "\n"; // Output: 3

$statues2 = [0, 3, 5];
echo "Jumlah patung yang diperlukan: " . calculateNeededStatues($statues2) . "\n"; // Output: 3
