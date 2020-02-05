<?php

include_once 'Prodotto.php';
include_once 'Smart_Device.php';


class Smartwatch extends Prodotto
{
    // richiamo delle caratteristiche comuni a device generici con la 'use' di un 'trait'
    use SmartDevice;
    public $formato;
    public $cardio;
    public $passi;
}
