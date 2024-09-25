<?php

function calculateNeededStatues($patung) {
    sort($patung);

    $jumlahPatungDibutuhkan = 0;
    $patungDibutuhkan = [];
    
    for ($i = 0; $i < count($patung) - 1; $i++) {
        $perbedaan = $patung[$i + 1] - $patung[$i];
        
        if ($perbedaan > 1) {
            for ($j = 1; $j < $perbedaan; $j++) {
                $jumlahPatungDibutuhkan++;
                $patungDibutuhkan[] = $patung[$i] + $j;
            }
        }
    }
    
    return [
        'jumlahPatungDibutuhkan' => $jumlahPatungDibutuhkan,
        'patungDibutuhkan' => $patungDibutuhkan
    ];
}

$patung1 = [6, 2, 3, 8];
$result1 = calculateNeededStatues($patung1);
var_dump($result1);
echo "Jumlah patung yang diperlukan: " . $result1['jumlahPatungDibutuhkan'] . "\n";
echo "Patung dengan tinggi: " . implode(', ', $result1['patungDibutuhkan']) . " diperlukan\n";

$patung2 = [0, 3, 5];
$result2 = calculateNeededStatues($patung2);
echo "Jumlah patung yang diperlukan: " . $result2['jumlahPatungDibutuhkan'] . "\n";
echo "Patung dengan tinggi: " . implode(', ', $result2['patungDibutuhkan']) . " diperlukan\n";

?>
