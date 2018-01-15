<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 10.01.2018
 * Time: 13:27
 */

require('yhendus.php');


if (!$yhendus){
    echo 'Probleem andmebaasi ühendamisel';
    echo mysqli_connect_error($yhendus).'<br />';
    echo mysqli_connect_errno($yhendus).'<br />';
} else {
    echo 'On loodud ühendus andmebaasiga <br />';
    $eesnimi = 'Teet';
    $sql = 'INSERT INTO USERS(eesnimi, perenimi, synnikuupaev)'.
    'VALUES(\''.$eesnimi.'\',\'Kasutaja\',\'1999-03-24\')';
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus){
        echo 'Probleem päringuga <br />';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />';
    } else {
        echo 'Andmed on salvestatud';
        $sql = 'SELECT * FROM USERS';
        if (!$tulemus) {
            echo 'Probleem päringuga <br />';
            echo mysqli_error($yhendus) . '<br />';
            echo mysqli_errno($yhendus) . '<br />';
        } else {
            echo '<table border="1">';
            while ($rida = mysqli_fetch_assoc($tulemus)) {
                echo '<tr>';
                foreach ($rida as $element) {
                    echo '<td>' . $element . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }
    }
}
