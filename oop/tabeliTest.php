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

//väljastame tabeli test kujul

echo '<pre>';
print_r($minutabel);
echo '</pre>';