<?php

include_once 'Prodotto.php';

class Smartphone extends Prodotto
{
    public $OS;
    public $dimensione_display;
    public $ram;
    public $dual_sim;
    public $tipo_connessione;
    public $versione_bt;

    public function __construct($id_prodotto, $nome_prodotto, $categoria, $marca = null, $quantita = 0, $OS, $dimensione_display, $ram = 0)
    {
        // richiamo il costruttore della classe padre con i suoi parametri
        parent::__construct($id_prodotto, $nome_prodotto, $categoria, $marca, $quantita);
        $this -> OS =  $OS;
        $this -> dimensione_display = $dimensione_display;
        $this -> ram = $ram;
    }

    // public function boh($???)
    // {
    //     return $??????;
    // }
}
