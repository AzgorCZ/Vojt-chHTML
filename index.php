<?php
require 'C:/wamp64/www/tracy/tracy.phar';
require_once('zpracovaniRodneho.php');

use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;
 //format rodného čísla "036027/1111";
$marie = new zpracovaniRodneho("036027/1111", "marie");
$marie->jmeno();
$marie->vek();
$marie->datum();
$marie ->pohlavi();

$pepa = new zpracovaniRodneho("860124/1111", "pepa");
$pepa->jmeno();
$pepa->vek();
$pepa->datum();
$pepa ->pohlavi();
?>