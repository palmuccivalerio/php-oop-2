<?php


require_once 'products.php';

class Giochi extends Prodotto {
    
    private string $materiale;

    public function setMateriale(string $materiale) {

        $this->materiale = $materiale;
    }

   
}
?>