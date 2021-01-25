<?php

interface BolaInterface
{
    public function tendensiSentral($jari);
}

class volumebola implements BolaInterface
{
    public function tendensiSentral($jari)
    {
        echo 'Volume Bola : ' . (4/3*3.14*($jari*$jari*$jari));
    }
}

class luaspermukaanbola implements BolaInterface
{
    public function tendensiSentral($jari)
    {
        echo 'Luas Permukaan Bola : ' . (4*3.14*($jari*$jari));
    }
}

class NoTendensiSentral implements BolaInterface
{
    public function tendensiSentral($jari)
    {
        echo 'Anda tidak memilih.';
    }
}

class BolaPilihan
{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral) {
            case 'Volume Bola':
                return new volumebola;
            case 'Luas Permukaan Bola':
                return new luaspermukaanbola;
            default:
                return new NoTendensiSentral;
        }
    }
}

$jari = 30;
BalokPilihan::tendensiSentralUntuk('Volume Bola')->tendensiSentral($jari);
echo '<br>';
BalokPilihan::tendensiSentralUntuk('Luas Permukaan Bola')->tendensiSentral($jari);