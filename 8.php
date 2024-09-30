<?php

function countOccurrences($data, $cari) {
    $count = 0;
    foreach ($data as $value) {
        if ($value == $cari) {
            $count++;
        }
    }
    return $count;
}

$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 90;

$jumlah = countOccurrences($data, $cari);

echo "Angka $cari muncul sebanyak $jumlah kali.";

?>