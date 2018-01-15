<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 15.01.2018
 * Time: 09:27
 */

require_once 'tekst.php';
// loome reaalse objekti tekst class abil
$minuTekst = new tekst('Tere Maailm!');
// teostame testvaade antud objektist
echo '<pre>';
print_r($minuTekst);
echo '</pre>';

$minuTekst->prindiTekst();