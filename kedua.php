<?php
function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilinglingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari ;
    return $keliling ;
}

function volumebola($jari) : float{
    $volumebola = (4/3)*3.14*$jari*$jari;
    return $volumebola;
}

function volumetabung($jari,$tinggi) : float{
    $volumetabung = 3.14 *$jari*$jari*$tinggi;
    return $volumetabung;
}

function volumekerucut($jari,$tinggi) : float{
    $volumekerucut = (1/3) * 3.14 *$jari*$jari*$tinggi;
    return $volumekerucut;
}

$jari = readline('Masukkan nilai jari-jari : ');
$tinggi = readline('Masukkan nilai tinggi : ');

$luas = luaslingkaran($jari);
$keliling_lingkaran = kelilinglingkaran($jari);
$volume_bola = volumebola($jari) ;
$volume_tabung = volumetabung($jari,$tinggi) ;
$volume_kerucut = volumekerucut($jari,$tinggi);

echo "Luas lingkaran : {$luas}\n";
echo "Keliling lingkaran : {$keliling_lingkaran}\n";
echo "Volume bola : {$volume_bola}\n";
echo "Volume tabung :{$volume_tabung}\n";
echo "Volume kerucut :{$volume_kerucut}\n";