<?php
echo '<pre>';
// $tv1 = new Telikas(55);
// print_r($tv1->showList());

// var_dump($tv1);
require __DIR__ . '/Telikas.php';
require __DIR__ . '/Kibiras2.php';

$stu1 = new Kibiras2;
$stu2 = new Kibiras2;

$stu1->prideti1Akmeni();
$stu1->prideti1Akmeni();
$stu1->prideti1Akmeni();
$stu1->pridetiDaugAkmenu(3);
$stu2->prideti1Akmeni();

echo 'stu1:'. $stu1->kiekPririnktaAkmenu();
echo "\n";
echo 'stu2:'. $stu2->kiekPririnktaAkmenu();

echo "\n";
echo 'VISO:' . $stu2->kiekBendraiYraAkmenu();