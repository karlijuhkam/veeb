<?php
require_once 'raamat_vorm.php';

raamatuVorm();
$raamat = array(
    'title' => 'Peppa Goes To London',
    'author' => 'Ladybird',
    'print' => 'Penguin',
    'status' => 'valjas'
);
salvestaRaamat($raamat, 'raamatud.txt');
?>