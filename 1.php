<?php

function cekAngka($teks) {
    $angka = preg_replace('/\D/', '', $teks);

    if ($angka) {
        echo "teks mengandung angka" . implode(', ', str_split($angka));
    } else {
        echo "teks tidak mengandung angka";
    }
}

$teks = "Selamat ulang tahun yang ke 900171!";
cekAngka($teks);

?>