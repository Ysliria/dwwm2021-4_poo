<?php

use App\Moine;
use App\Guerrier;

require 'vendor/autoload.php';

$koss   = new Guerrier('Koss', 600);
$meloni = new Moine('Meloni', 200);



var_dump($koss, $meloni);
