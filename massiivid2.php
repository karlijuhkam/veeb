<?php

$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 16,
    'klass' => 10
);
echo '<pre>';
print_r($opilane);
echo '</pre>';

echo '<hr />';

foreach ($opilane as $voti => $vaartus){
    echo $voti.' - '.$vaartus.'<br />';
}

echo '<hr />';

$opilased = array(
    array(
        'eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 16,
        'klass' => 10
    ),
    array(
        'eesnimi' => 'Anna',
        'perenimi' => 'Minna',
        'vanus' => 18,
        'klass' => 11
    ),
    array(
        'eesnimi' => 'Kari',
        'perenimi' => 'Munasid',
        'vanus' => 17,
        'klass' => 10)
);

echo '<pre>';
print_r($opilased);
echo '</pre>';

echo '<hr />';



foreach ($opilased as $opilane){
    ksort($opilane);
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '-------'.'<br />';
}

/*
 * Defineeri raamatud kirjeldav massiiv kujul:
 * array(
 *      array(
 *          'title' => 'raamat',
 *          'author' => 'autor',
 *          'print' => 'trükikoda',
 *          'status' => 'seisund]'
 *      )
 * );
 * Loo funktsioon, mille parameetrina on raamatute
 * massiiv ja seisund, funktsioon tagastab massiivi,
 * kus on raamatud vastava seisundiga (seisund tähendab,
 * kas raamat on välja antud või mitte).
 * Loo funktsioon, mis võtab parameetrina massiivi, ja
 * väljastab tulemused tabeli kujul. Tabeli pealkirjaks
 * on massiivi võtmed
 * */

$raamatud = array(
    array(
    'title' => 'Kuidas ma käisin kuul',
    'author' => 'Edgar Savisaar',
    'print' => 'Trykker',
    'status' => 'valjas'
    ),
    array(
        'title' => 'Kukeseene kuulamise kunst',
        'author' => 'Valdur Mikita',
        'print' => 'Välgi metsad',
        'status' => 'sees'
    ),
    array(
        'title' => 'Merivälja',
        'author' => 'Indrek Hargla',
        'print' => 'Raudhammas',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Eestlase käsiraamat',
        'author' => 'Mihkel Raud',
        'print' => 'Rahva Raamat',
        'status' => 'sees'
    ),
    array(
        'title' => '100 nippi kuidas suhet hoida',
        'author' => 'Kirsti Timmer',
        'print' => 'Helios Kirjastus',
        'status' => 'sees'
    )
);

function otsi($raamatud, $seisund){
    $leitud = array();
    foreach ($raamatud as $raamat){
        foreach ($raamat as $kirjeldus => $vaartus){
            if($kirjeldus == 'status' and $vaartus == $seisund){
                $leitud[] = $raamat;
            }
        }
    }
    return $leitud;
}
echo '<pre>';
print_r(otsi($raamatud, 'valjas'));
echo '</pre>';
function pealkiri($raamat){
    $pealkiri = array_keys($raamat);
    echo '<tr>';
    foreach ($pealkiri as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
}
function valjasta($raamatud){
    $pealkiriValjas = 0;
    echo '<table border="1">';
    foreach($raamatud as $raamat){
        echo '<tr>';
        if($pealkiriValjas == 0){
            pealkiri($raamat);
            $pealkiriValjas = 1;
        }
        foreach ($raamat as $info) {
            echo '<td>' . $info . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
valjasta($raamatud);
echo '<hr />';
valjasta(otsi($raamatud, 'valjas'));
echo '<hr />';
?>