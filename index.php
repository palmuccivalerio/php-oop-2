<?php

require_once 'Models/products.php';
require_once 'Models/cibo.php';

$cibo = new Cibo('aaa', 100, 'path', 'cane');

$cibo->setScadenza('2024-06-01');

var_dump($cibo->isScaduto());