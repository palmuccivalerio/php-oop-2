<?php


require_once 'products.php';

class Cuccia extends Prodotto {
    
    private string $dimensione;

    public function setDimensione(string $dimensione) {

        $this->dimensione = $dimensione;
    }

   
}
?>