<?php
require 'C:/wamp64/www/tracy/tracy.phar';
require_once('zpracovaniRodneho.php');

use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

$rodneCislo = "036027/1111";
echo "rodne cislo: " . $rodneCislo;
$var = new zpracovaniRodneho($rodneCislo);
$var->vek();
$var->datum();
$var ->pohlavi();

?>