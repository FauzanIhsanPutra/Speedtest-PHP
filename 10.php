<?php

$data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
$dewasa = 0;
$anak = 0;

foreach ($data as $umur) {
    if ($umur >= 17){
        $dewasa ++;
    } else if ($umur < 17){
        $anak ++;
    }
}

echo "list umur = " . implode(", ", $data) . "\n". "<br>";
echo "Jumlah kategori dewasa = $dewasa";
echo "<br>";
echo "jumlah kategori anak-anak = $anak";

?>