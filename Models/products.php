<?php
class Prodotto {
    protected $titolo;
    protected $prezzo;
    protected $immagine;
    protected $tipo;

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
?>


<!-- 
Categorie: Definiscono il tipo di animali (Cani, Gatti).
Prodotti: Oggetti che rappresentano i prodotti venduti, con dettagli come titolo, prezzo, immagine, e categoria.
Sottoclassi: Rappresentano tipi specifici di prodotti (Cibo, Gioco, Cuccia). -->