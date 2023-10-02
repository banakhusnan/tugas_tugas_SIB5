<?php
require_once "Bentuk2D.php";

class PersegiPanjang extends Bentuk2D
{
    protected $panjang, $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        echo "Persegi Panjang";
    }

    public function luasBidang()
    {
        echo $this->panjang * $this->lebar;
    }

    public function kelilingBidang()
    {
        echo (2 * $this->panjang) + (2 * $this->lebar);
    }
}
