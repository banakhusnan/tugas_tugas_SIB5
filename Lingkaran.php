<?php
require_once "Bentuk2D.php";

class Lingkaran extends Bentuk2D
{
    public $jari2;

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }

    public function namaBidang()
    {
        echo "Lingkaran";
    }

    public function luasBidang()
    {
        echo 3.14 * $this->jari2 * $this->jari2;
    }

    public function kelilingBidang()
    {
        echo 2 * 3.14 * $this->jari2;
    }
}
