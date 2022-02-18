<?php

require_once 'Personnage.php';
require_once 'Guerrier.php';
require_once 'Moine.php';

$koss   = new Guerrier('Koss', 600);
$meloni = new Moine('Meloni', 200);

var_dump($koss, $meloni);
