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

    public function __construct($id_prodotto, $nome_prodotto, $categoria, $marca = null, $quantita = 0, $OS, $cardio)
    {
        // richiamo il costruttore della classe padre con i suoi parametri
        parent::__construct($id_prodotto, $nome_prodotto, $categoria, $marca, $quantita);
        // inizializzo un attributo incluso nella trait SmartDevice
        $this -> OS =  $OS;
        // inizializzo un attributo specifico di questa classe Smartwatch
        $this -> cardio = $cardio;
    }
}
