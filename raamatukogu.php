<?php
require_once 'raamat_vorm.php';




$raamat = loeVormist();
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmed('raamatud.txt');