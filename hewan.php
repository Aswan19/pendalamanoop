<?php
class Hewan
{
    public $nama;
    public $jumlahKaki;
    public $keahlian;
    public function __construct($nama, $jumlahKaki, $keahlian)
    {
        $this->nama = $nama;
        $this->jumlahKaki = $jumlahKaki;
        $this->keahlian = $keahlian;
    }
    public $darah = 50;

    public function atraksi()
    {
        echo $this->nama . ' sedang ' . $this->keahlian;
    }
}
