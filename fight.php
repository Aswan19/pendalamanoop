<?php
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
