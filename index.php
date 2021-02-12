<?php		

error_reporting( error_reporting() & ~E_NOTICE & ~E_WARNING );

require 'Kalkulator.php';

$kalkulator = new Kalkulator($_GET["prviBroj"], $_GET["drugiBroj"], $_GET["operacija"]);

$rezultat = $kalkulator->izracunaj();

require 'view.html';
