<?php

$bil1 =  [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok1 = array_intersect($bil1, $bil2);
$kelompok2 = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

echo "Array pertama = " . implode(", ", $bil1) . "\n". "<br>"; 
echo "Array kedua = " . implode(", ", $bil2) . "\n". "<br>"; 
echo "bilangan yang ada di kedua array = " .  implode(", ", $kelompok1) . "\n" . "<br>";
echo "bilangan yang tidak ada di kedua/hanya di salah satu array = " .  implode(", ", $kelompok2) . "\n" . "<br>";

?>