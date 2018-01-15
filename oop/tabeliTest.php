<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 15.01.2018
 * Time: 12:32
 */

require_once 'tabel.php';

//loome tabel kirjelduse järgi objekti
$minutabel = new tabel(array('a','b','c'));

//lisame tabelid read
$minutabel->lisaRida(array(1,2,3));
$minutabel->lisaRida(array(4,5,6));
$minutabel->lisaRida(array(7,8,9));

//väljastame tabeli test kujul

echo '<pre>';
print_r($minutabel);
echo '</pre>';