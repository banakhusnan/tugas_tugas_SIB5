<?php

class KonversiSuhu
{
    public $satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan)
    {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    function konversiSuhu()
    {
        $hasil = 0;

        // Konversi dari Celcius ke satuan lainnya
        if ($this->satuanSuhuAwal === 'Celcius') {
            if ($this->satuanSuhuTujuan === 'Fahrenheit') {
                $hasil = ($this->besaranSuhu * 9 / 5) + 32;
            } elseif ($this->satuanSuhuTujuan === 'Rheamur') {
                $hasil = $this->besaranSuhu * 4 / 5;
            } elseif ($this->satuanSuhuTujuan === 'Celcius') {
                $hasil = $this->besaranSuhu;
            }
        }

        // Konversi dari Fahrenheit ke satuan lainnya
        elseif ($this->satuanSuhuAwal === 'Fahrenheit') {
            if ($this->satuanSuhuTujuan === 'Celcius') {
                $hasil = ($this->besaranSuhu - 32) * 5 / 9;
            } elseif ($this->satuanSuhuTujuan === 'Rheamur') {
                $hasil = ($this->besaranSuhu - 32) * 4 / 9;
            } elseif ($this->satuanSuhuTujuan === 'Fahrenheit') {
                $hasil = $this->besaranSuhu;
            }
        }

        // Konversi dari Réaumur ke satuan lainnya
        elseif ($this->satuanSuhuAwal === 'Rheamur') {
            if ($this->satuanSuhuTujuan === 'Celcius') {
                $hasil = $this->besaranSuhu * 5 / 4;
            } elseif ($this->satuanSuhuTujuan === 'Fahrenheit') {
                $hasil = ($this->besaranSuhu * 9 / 4) + 32;
            } elseif ($this->satuanSuhuTujuan === 'Rheamur') {
                $hasil = $this->besaranSuhu;
            }
        }

        return $hasil;
    }

    public function mencetak()
    {
        echo "Satuan Suhu Awal : $this->satuanSuhuAwal";
        echo "<br>Besaran Suhu : $this->besaranSuhu";
        echo "<br>Satuan Suhu Tujuan : $this->satuanSuhuTujuan";
        echo "<br>Hasil Konversi : " . self::konversiSuhu();
    }
}
