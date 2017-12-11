<?php
/**
 * Created by PhpStorm.
 * User: Karli
 * Date: 11.12.2017
 * Time: 11:06
 */
header('Refresh:5');
$vanus = rand(0,99);

if($vanus >= 0 and $vanus < 11){
    echo 'Oled laps, kes on '.$vanus.' aastat vana.';
}   elseif($vanus > 10 and $vanus < 18){
        echo 'Oled nooruk, kes on '.$vanus.' aastat vana.';
}   elseif($vanus > 17 and $vanus < 65) {
        echo 'Oled täiskasvanu, kes on ' . $vanus . ' aastat vana.';
}   else {
        echo 'Oled seenior, kes on ' . $vanus . ' aastat vana.';
}

?>