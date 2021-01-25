<?php

class BolaPilihan
{
    public function volumebola($jari)
    {
        echo 'Volume Bola : ' . (4/3*3.14*($jari*$jari*$jari));
    }

    public function luaspermukaanpbola($jari)
    {
        echo 'Luas Permukaan Bola: ' . (4*3.14*($jari*$jari));
    }

    public function noChoice($jari)
    {
        echo 'Anda tidak memilih.';
    }

    public function tendensiSentralUntuk($tendensiSentral, $jari)
    {
        switch ($tendensiSentral) {
            case 'Volume Bola':
                $this->volumebola($jari);
            case 'Luas Permukaan Bola':
                $this->luaspermukaanpbola($jari);
            default:
                $this->noChoice($jari);
        }
    }
}

$jari = 30;
$tendensiSentral = new BolaPilihan;
$tendensiSentral->tendensiSentralUntuk('volume', $jari);