<?php
$var1 = 10;
$var2 = 30;
$var3 = 14.5;
$var4 = '5';
$var5 = '2';
$var6 = true;
$var7 = false;

echo '$var1 = '.$var1.' - '.gettype($var1).'<br>';
echo '$var2 = '.$var2.' - '.gettype($var2).'<br>';
echo '$var3 = '.$var3.' - '.gettype($var3).'<br>';
echo '$var4 = '.$var4.' - '.gettype($var4).'<br>';
echo '$var5 = '.$var5.' - '.gettype($var5).'<br>';
echo '$var6 = '.$var6.' - '.gettype($var6).'<br>';
echo '$var7 = '.$var7.' - '.gettype($var7).'<br>';

function vordlus($toevaartus){
    if($toevaartus == true) {
        echo 'true';
    }
    else {
        echo 'false';
    }
}

echo $var1.' == '.$var2.vordlus($var1 == $var2).'<br>'


?>