<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }

    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public $jari_jari;
    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 7;
$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();
echo "Luas lingkaran : {$luas_lingkaran} cm\n";
echo "Keliling lingkaran : {$keliling_lingkaran} cm\n";


$bola = new Bola();
$bola->jari_jari = 7;
$volume_bola = $bola->volume();
echo "Volume bola : {$volume_bola} cm^3\n";


$tabung = new Tabung();
$tabung->jari_jari = 7;
$tabung->tinggi = 10;
$volume_tabung = $tabung->volume();
echo "Volume tabung : {$volume_tabung} cm^3\n";

$kerucut = new Kerucut();
$kerucut->jari_jari = 7;
$kerucut -> tinggi = 10;
$volume_kerucut = $kerucut->volume(10); 
echo "Volume kerucut : {$volume_kerucut} cm^3\n";


$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;
$volume_nasi_tumpeng = $nasi_tumpeng->volume();
echo "Volume nasi tumpeng : {$volume_nasi_tumpeng} \n"; 