<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
$jam = date('H:i');

// echo "Halo {$nama} sekarang pukul {$waktu}";

if ($waktu>=5){
    echo "Selamat pagi, {$nama} sekarang pukul {$jam}";
}
elseif ($waktu>=11){
    echo "Selamat siang, {$nama} sekarang pukul {$jam}";
}
elseif ($waktu>=15){
    echo "Selamat sore, {$nama} sekarang pukul {$jam}";
}
elseif ($waktu>=19){
    echo "Selamat malam, {$nama} sekarang pukul {$jam}";
}