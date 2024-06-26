<?php

require_once 'products.php';

class Cibo extends Prodotto {
    
    private string $scadenza;

    public function setScadenza(string $data) {

        $this->scadenza = $data;
    }

    public function isScaduto() {

        if ($this->scadenza < date('Y-m-d')) {
            return true;
        } else {
            return false;
        }
    }
}
