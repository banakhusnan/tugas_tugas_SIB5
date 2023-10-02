<?php
require_once "Bentuk2D.php";

class Segitiga extends Bentuk2D
{
    public $alas, $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
        echo "Segitiga";
    }

    public function luasBidang()
    {
        echo 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang()
    {
        echo 3 * $this->alas;
    }
}
