<?php
class Prodotto {
    private $titolo;
    private $prezzo;
    private $immagine;
    private $tipo;

    public function __construct($titolo, $prezzo, $immagine, $tipo) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->tipo = $tipo;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getImmagine() {
        return $this->immagine;
    }


    public function getTipo() {
        return $this->tipo;
    }
}