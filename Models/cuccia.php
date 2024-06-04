<?php


require_once 'products.php';

class Cuccia extends Prodotto {
    
    private string $dimensione;

    public function setDimensione(string $dimensione) {
        if ($dimensione < 10 || $dimensione > 100) {
            throw new Exception("Dimensione non valida");
          }
        $this->dimensione = $dimensione;
    }

   
}
?>