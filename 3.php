<?php

$angka = 5;
$operator = 1;

while ($angka <= 110) {
    if (strpos((string)$angka, '0' ) === false){
        echo $operator . " x 5 = " . $angka . "<br>";
    }

    $operator++;
    $angka += 5;
}

?>