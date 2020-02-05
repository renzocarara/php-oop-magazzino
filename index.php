<?php
include_once 'Prodotto.php';
include_once 'Smartphone.php';
include_once 'Smartwatch.php';
//include_once 'Ricondizionato.php';

// creo un'istanza della classe smartphone
// il costruttore riceve 8 parametri (!) , 5 derivano dalla classe padre Prodotto, 3 dalla classe extended Smartphone
$cell_s10 = new Smartphone('AA300', 's10', 'smartphone', 'samsung', 40, 'android', 6.1, 512);

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

// -----------------------------------------------------------------------------

// creo un'istanza della classe smartwatch
// il costruttore riceve 7 parametri (!) , 5 derivano dalla classe padre Prodotto, 2 dalla classe extended Smartphone
$watch_gt2 = new Smartwatch('HW200', 'GT2', 'smartwatch', 'huawei', 10, 'LiteOS', 'yes');

$watch_gt2 -> descrizione="Una svolta nell'allenamento personale, lo Smartwatch 46 mm Huawei Watch GT2 Elite Edition...";
$watch_gt2 -> fornitore= "Pluto elettronica srl";
$watch_gt2 -> data_primo_ordine= '2018-09-10';
$watch_gt2 -> data_ultimo_ordine ='2019-05-22';
$watch_gt2 -> costo = 130;
$watch_gt2 -> sconto = 15;
$watch_gt2 -> cardio = 'yes';
$watch_gt2 -> passi = 'yes';
$watch_gt2 -> barometro = 'yes';
$watch_gt2 -> quadrante = 'circolare';
// stampo scorte del prodotto
$watch_gt2->stampaScorteProdotto();
// stampo data inizio fornitura
$watch_gt2->stampaInStockDal();
// stampo disponibilità
$watch_gt2->stampaDisponibilita();
