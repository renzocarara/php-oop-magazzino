<?php

include_once 'Prodotto.php';
include_once 'Smart_Device.php';


class Smartphone extends Prodotto
{
    use SmartDevice;
    public $dual_sim;
    public $tipo_connessione;
    public $versione_bt;

    public function __construct($_id_prodotto, $_nome_prodotto, $_categoria, $_marca = null, $_quantita = 0, $_OS, $_dimensione_display, $_ram = 0)
    {
        // richiamo il costruttore della classe padre con i suoi parametri
        parent::__construct($_id_prodotto, $_nome_prodotto, $_categoria, $_marca, $_quantita);
        // inizializzo gli attributi inclusi nella trait SmartDevice
        $this -> OS =  $_OS;
        $this -> dimensione_display = $_dimensione_display;
        $this -> ram = $_ram;
    }

    // public function ($???)
    // {
    //     return $??????;
    // }
}
