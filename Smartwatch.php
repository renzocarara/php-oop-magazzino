<?php

include_once 'Prodotto.php';
include_once 'Smart_Device.php';


class Smartwatch extends Prodotto
{
    // richiamo delle caratteristiche comuni a device generici con la 'use' di un 'trait'
    use SmartDevice;
    public $cardio;
    public $passi;
    public $barometro;
    public $quadrante;

    public function __construct($_id_prodotto, $_nome_prodotto, $_categoria, $_marca = null, $_quantita = 0, $_OS, $_cardio)
    {
        // richiamo il costruttore della classe padre con i suoi parametri
        parent::__construct($_id_prodotto, $_nome_prodotto, $_categoria, $_marca, $_quantita);
        // inizializzo un attributo incluso nella trait SmartDevice
        $this -> OS =  $_OS;
        // inizializzo un attributo specifico di questa classe Smartwatch
        $this -> cardio = $_cardio;
    }
}
