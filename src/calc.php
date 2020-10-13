<?php
/* Zibrinyiné Luca, 2020-10-06*/

$diameter = $_GET['diameter'];

$costs = round(pow($diameter/2, 2) * pi()*2500.0);


echo file_get_contents('templates/head.tpl');

$page = file_get_contents('templates/calc.tpl');
$page = str_replace('{{ eredmeny }}', $costs, $page);
echo $page;

echo file_get_contents('templates/foot.tpl');
