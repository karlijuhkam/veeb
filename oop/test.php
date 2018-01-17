<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 15.01.2018
 * Time: 09:27
 */

require_once 'tekst.php';
require_once 'vtekst.php';
// loome reaalse objekti tekst class abil
$minuTekst = new tekst('Tere Maailm!');
// teostame testvaade antud objektist
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// väljastame objekti sone väärtus
$minuTekst->prindiTekst();
echo '<hr />';
// loome reaalse objekti vtekst klassi abil
$varvituTekst = new vtekst('Värvitu tekst');
// teostame testvaade antud objektist
echo '<pre>';
print_r($varvituTekst);
echo '</pre>';
// väljastame objekti sone väärtus
$varvituTekst->prindiTekst();
//
// loome reaalse objekti vtekst klassi abil
$punaneTekst = new vtekst('Punane tekst', '#FF0000');
// teostame testvaade antud objektist
echo '<pre>';
print_r($punaneTekst);
echo '</pre>';
// väljastame objekti sone väärtus
$punaneTekst->prindiTekst();