<?php
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */
echo 'ylessanne 1';
function looMassiiv($elemendid){
    $massiiv = array();
    for($i = 0; $i < $elemendid; $i++){
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
echo '<pre>';
print_r(looMassiiv(23));
echo '</pre>';
echo '<hr>';
/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
echo 'ylessanne 2'.'<br><br>';
function valjastaMassiiv($massiiv){
    foreach($massiiv as $asd){
        echo '<table border="1">';
        echo '<td>'.$asd.'<br>'.'</td>';
        echo '</table>';
    }
}
print_r(valjastaMassiiv(array(1,2,3,4,5,6)));
/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/
echo '<hr>';
echo 'ylesanne 3<br><br>';
function vahetaMinMax($massiiv){
    $suurim = max($massiiv);
    $vaikseim = min($massiiv);
    $suurimindex = array_search(max($massiiv), $massiiv);
    $vaikseimindex = array_search(min($massiiv), $massiiv);
    $massiiv[$suurimindex] = $vaikseim;
    $massiiv[$vaikseimindex] = $suurim;
    return $massiiv;
}
echo '<pre>';
print_r(vahetaMinMax(array(1,2,3,4,5)));
echo '</pre>';
/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud. Tulemus väljastatakse
 * antud funktsiooni abil kujul:
 *
 * Massiiv on 1, 0, 6, 0, 0, 3, 5
 * Tulemus: 1 * 6 * 5 = 30
*/
echo '<hr>';
echo 'ylesanne 4<br><br>';
function elementideKorrutis($massiiv){
    //$uus = array();
    $korrutis = 1;
    $lipp = 1;
    echo 'Tulemus: ';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] > 0 and $i % 2 == 0){
            //$uus[]=$massiiv[$i];
            $korrutis = $korrutis * $massiiv[$i];
            if($lipp == 1){
                echo $massiiv[$i];
                $lipp = 0;
            }else {
                echo '*'.$massiiv[$i];
            }
        }
    }
    echo ' = '.$korrutis;
}
elementideKorrutis(array(1,2,3,4,0,4,3,2,2,3,3,2,2,0,0,0,0));
/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */
echo '<hr>';
echo 'ylesanne 5<br><br>';
function mitteDubleeri($massiiv){
    foreach($massiiv as $element){
        if($valjasta != $element){
            $valjasta = $element;
            echo $element;
        }
    }
}
mitteDubleeri(array(1,1,1,2,2,2,2,3));

?>