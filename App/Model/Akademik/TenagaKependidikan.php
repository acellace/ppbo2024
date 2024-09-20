<?php

namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

class TenagaKependidikan extends Pegawai {
    public $gaji_pokok;
    
    public function cuti() : void {
        echo "($this->nama) telah mengajukan cuti";
    }
}
?>