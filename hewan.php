<?php 
class Hewan
{
    public $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    public $darah = 50;
    public $jumlahKaki;
    public $keahlian;

    public function atraksi()
    {
        return "$this->nama, $this->keahlian";
    }
}
