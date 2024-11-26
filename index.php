<?php

use Iutrds\Tp41\Alarme;

require 'Alarme.php';

$alarme = new Alarme();
$alarme->setMessage("Fin des cours !");

echo $alarme;