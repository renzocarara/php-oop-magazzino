<?php
include_once 'Prodotto.php';
include_once 'Smartphone.php';
//include_once 'Ricondizionato.php';

// creo un'istanza della classe smartphone
// il costruttore riceve 8 parametri (!) , 5 derivano dalla classe padre Prodotto, 3 dalla classe extended Smartphone
$cell_s10 = new Smartphone('AA300', 's10', 'smartphone', 'samsung', 40, 'android', 6.1, 512);

// var_dump($cell_s10);

// valorizzo gli altri attributi della classe Prodotto non inizializzati col costruttore
$cell_s10 -> descrizione="Galaxy S10 è il risultato di 10 anni di continua evoluzione e innovazione tecnologica...";
$cell_s10 -> fornitore= "Pippo elettronica srl";
$cell_s10 -> data_primo_ordine= '2019-01-10';
$cell_s10 -> data_ultimo_ordine ='2019-12-15';
$cell_s10 -> costo = 300;
$cell_s10 -> sconto = 5;
// valorizzo gli altri attributi della classe Smartphone non inizializzati col costruttore
$cell_s10 -> dual_sim= 'YES';
$cell_s10 -> tipo_connessione= '4G';
$cell_s10 -> versione_bt= '5.1';

// stampo scorte del prodotto
$cell_s10->stampaScorteProdotto();

// stampo data inizio fornitura
$cell_s10->stampaInStockDal();

// stampo disponibilità
$cell_s10->stampaDisponibilita();
