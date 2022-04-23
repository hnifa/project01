<?php 
class Pasien {
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $gender;
    public $email;
    public $tgl_periksa;
    public $kode;
    public $ket;

    function __construct($nama ,$tmp_lahir, $tgl_lahir, $gender, $email, $tgl_periksa, $kode, $ket){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->tmp_lahir = $tmp_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->gender = $gender;
        $this->email = $email;
        $this->tgl_periksa = $tgl_periksa;
        $this->ket = $ket;
    }
}

trait bmi {
    public $bb;
    public $tb;
    
    function __construct($bb, $tb){
        $this->bb = $bb;
        $this->tb = $tb;
    }

    public function nilai(){
        return number_format((float)$this->bb / ($this->tb/100) ** 2, 1, '.' , '');
    }

    public function statusBMI($ket){
        if ($ket < 18.5 ) return 'Kekurangan berat badan';
        elseif ($ket >= 18.5 && $ket <= 23.9) return'Normal';
        elseif ($ket >= 24 && $ket <= 26.9) return 'Kelebihan berat badan';
        elseif ($ket >= 27 && $ket <=29.9) return 'Obesitas 1';
        elseif ($ket >= 30) return 'Obesitas 2';
    }
}

class bmiPasien extends pasien  {
    use bmi;
    public $bmi;

    function __construct ($nama, $tmp_lahir, $tgl_lahir, $gender, $email, $bb, $tb, $tgl_periksa, $kode, $ket){
        parent :: __construct ($nama, $tmp_lahir, $tgl_lahir, $gender, $email, $bb, $tb, $tgl_periksa, $kode, $ket);
        $this->bb = $bb;
        $this->tb = $tb;
        $this->bmi = $this->nilai();
    }
}
?>