<?php
trait Fight
{
    use Hewan;

    public $attackPower;
    public $defencePower;

    public function __construct($nama, $jumlahKaki, $keahlian, $attackPower, $defencePower)
    {
        $this->nama = $nama;
        $this->jumlahKaki = $jumlahKaki;
        $this->keahlian = $keahlian;
        $this->attackPower = $attackPower;
        $this->defencePower = $defencePower;
    }

    public function serang($hewan1)
    {
        echo $this->nama . ' sedang menyerang ' . $hewan1;
    }

    public function diserang()
    {
        echo $this->nama . ' sedang diserang <br>';
        $new_darah = $this->darah - $this->attackPower / $this->defencePower;
        echo "darah sekarang : " . $new_darah . "<br>";
    }
}
