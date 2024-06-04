<?php

require_once 'Models/products.php';
require_once 'Models/cibo.php';
require_once 'Models/giochi.php';
require_once 'Models/cuccia.php';


$cibo = new Cibo('croccantini', 20, 'path', 'cane','40');
$gioco = new Giochi('topolino elettrico', 50, 'path', 'gatto',80);
$cuccia = new Cuccia('cuccia', 70, 'path', 'gatto',90);

$gioco->setMateriale('Plastica');
$cibo->setScadenza('2024-06-01');
$cuccia->setDimensione(50);


var_dump($cibo->isScaduto());
var_dump($gioco);
var_dump($cuccia);
