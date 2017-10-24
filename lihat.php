<?php

require_once 'd.php';

$robot1 = new mesin ('wek wek wek',88);

$robot1->set_suara('wak wik wok');
$robot1->set_berat(300);


echo "suara mesinnya : " .$robot1->get_suara() .'<br>'.' Dan mempunyai berat :' .$robot1->get_berat().' kg' .'<br>';
?>