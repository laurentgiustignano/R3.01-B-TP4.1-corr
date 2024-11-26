<?php

use Iutrds\Tp41\Alarme;

require 'vendor/autoload.php';

$alarme = new Alarme();
$alarme->setMessage("Fin des cours !");

echo $alarme;