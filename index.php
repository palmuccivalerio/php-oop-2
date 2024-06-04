<?php

require_once 'Models/products.php';
require_once 'Models/cibo.php';
require_once 'Models/giochi.php';
require_once 'Models/cuccia.php';

$cibo = new Cibo('croccantini', 20, 'path', 'cane');
$gioco = new Giochi('topolino elettrico', 50, 'path', 'gatto');
$cuccia = new Cuccia('cuccia', 70, 'path', 'gatto');

$gioco->setMateriale('Plastica');
$cibo->setScadenza('2024-06-01');
$cuccia->setDimensione(50);


var_dump($cibo->isScaduto());
var_dump($gioco);
var_dump($cuccia);
