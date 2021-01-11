<?php
class Elang
{
    use Hewan, Fight;

    public function getInfoHewan()
    {
        echo "<h5>Info Hewan :</h5>
        <ul>
            <li>Nama : " . $this->nama . "</li>
            <li>Darah : " . $this->darah . "</li>
            <li>Jumlah Kaki : " . $this->jumlahKaki . "</li>
            <li>Keahlian : " . $this->keahlian . "</li>
            <li>Attack Power : " . $this->attackPower . " </li>
            <li>Defence Power : " . $this->defencePower . "</li>
        </ul>";
    }
}
