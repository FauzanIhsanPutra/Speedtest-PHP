<?php

function bandingkanNama($nama1, $nama2) {
    $panjang1 = strlen($nama1);
    $panjang2 = strlen($nama2);


    echo "Jumlah karakter nama $nama1 adalah = $panjang1 <br>";
    echo "Jumlah karakter nama $nama2 adalah = $panjang2 <br>";

    if ($panjang1 > $panjang2) {
        $selisih1 = $panjang1 - $panjang2;
        echo "Selisih karakter nama $nama1 dan $nama2 adalah = $selisih1";
    } elseif ($panjang2 > $panjang1 ) {
        $selisih2 = $panjang2 - $panjang1;
        echo "Selisih karakter nama $nama2 dan $nama1 adalah = $selisih2";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama";
    }
}

$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya Legina";

bandingkanNama($nama1, $nama2);

?>