<?php
trait Hewan
{
    public $nama;
    public $jumlahKaki;
    public $keahlian;
    public $darah = 50;

    public function atraksi()
    {
        echo $this->nama . ' sedang ' . $this->keahlian;
    }
}
