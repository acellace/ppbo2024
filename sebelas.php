<?php

require_once 'vendor/autoload.php';

use App\Model\Akademik\Dosen;

$dian = new Dosen();
$dian->nama = 'Dian Prawira';
$dian->nip = '198411132015041001';
$dian->setNoHp(62111111);
$dian->alamat = 'Jln Purnama';
$dian->nidn = '1000121184001';
$dian->mengajar();
?>