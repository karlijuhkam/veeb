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
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '-------'.'<br />';
}
?>