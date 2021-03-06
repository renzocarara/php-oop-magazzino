<?php

class Prodotto
{
    public $id_prodotto;
    public $nome_prodotto;
    public $categoria;
    public $marca;
    public $quantita;
    public $descrizione;
    public $fornitore;
    public $data_primo_ordine;
    public $data_ultimo_ordine;
    public $costo;
    public $sconto;

    public function __construct($_id_prodotto, $_nome_prodotto, $_categoria, $_marca = null, $_quantita = 0)
    {
        $this -> id_prodotto = $_id_prodotto;
        $this -> nome_prodotto = $_nome_prodotto;
        $this -> categoria = $_categoria;
        $this -> marca = $_marca;
        $this -> quantita = $_quantita;
    }

    public function stampaScorteProdotto()
    {
        echo 'ID prodotto: ' . $this->id_prodotto . '<br>';
        echo 'Nome prodotto: ' . $this->nome_prodotto . '<br>';
        echo 'Quantità: ' . $this->quantita . '<br>';
        echo 'Data ultimo ordine: ' . $this->data_ultimo_ordine . '<br><br>';
    }
    public function stampaInStockDal()
    {
        echo 'ID prodotto: ' . $this->id_prodotto . '<br>';
        echo 'Nome prodotto: ' . $this->nome_prodotto . '<br>';
        echo 'In stock dal: ' . $this->data_primo_ordine . '<br><br>';
    }
    public function stampaDisponibilita()
    {
        echo 'ID prodotto: ' . $this->id_prodotto . '<br>';
        echo 'Nome prodotto: ' . $this->nome_prodotto . '<br>';
        echo 'Data ultimo ordine: ' . $this->data_ultimo_ordine . '<br>';

        if ($this->quantita>=1 && $this->quantita<=5) {
            echo "DISPONIBILE, ma in esaurimento" . '<br><br>';
        } elseif ($this->quantita>=6) {
            echo "DISPONIBILE" . '<br><br>';
        } else {
            echo "ESAURITO!!" . '<br><br>';
        }
    }
}
