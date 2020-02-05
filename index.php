<?php
include_once 'Prodotto.php';
include_once 'Smartphone.php';
//include_once 'Ricondizionato.php';

// creo un'istanza di uno smatphone
$cell_s10 = new Smartphone('AA300', 's10', 'smartphone', 'samsung', 40);

// valorizzo le altre proprietà non inizializzate col costruttore
$cell_s10 -> descrizione="Galaxy S10 è il risultato di 10 anni di continua evoluzione e innovazione tecnologica...";
$cell_s10 -> fornitore= "Pippo elettronica srl";
$cell_s10 -> data_primo_ordine= '2019-01-10';
$cell_s10 -> data_ultimo_ordine ='2019-12-15';
$cell_s10 -> costo = 300;
$cell_s10 -> sconto = 5;

// stampo scorte del prodotto
$cell_s10->stampaScorteProdotto();

// stampo data inizio fornitura
$cell_s10->stampaInStockDal();

// stampo disponibilità
$cell_s10->stampaDisponibilita();
