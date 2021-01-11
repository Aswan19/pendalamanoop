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

trait Fight
{
    public $attackPower;
    public $defencePower;

    public function serang()
    {
        echo 'sedang menyerang';
    }

    public function diserang()
    {
        echo 'sedang diserang';
    }
}

class Elang extends Hewan
{
    public $jumlahKaki = 2;
    public $keahlian = 'terbang tinggi';
    public $attackPower = 10;
    public $defencePower = 5;
}

class Harimau extends Hewan
{
    public $jumlahKaki = 4;
    public $keahlian = 'lari cepat';
    public $attackPower = 7;
    public $defencePower = 8;
}

$harimau = new harimau("harimau");
$elang = new Elang("elang");

var_dump($harimau);
var_dump($elang);
