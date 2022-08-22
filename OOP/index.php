<?php
echo '<pre>';
// $tv1 = new Telikas(55);
// print_r($tv1->showList());

// var_dump($tv1);
require __DIR__ . '/Telikas.php';

require __DIR__ . '/Kibiras2.php';

require __DIR__ . '/SuperKibiras2.php';
$stu1 = new SuperKibiras2;
$stu2 = new SuperKibiras2;
// $stu3 = clone($stu1);
// $stu4 = unserialize(serialize($stu1));
var_dump($stu1);
var_dump($stu2);
// var_dump($stu3);
// var_dump($stu4);

$stu1->prideti1Akmeni();
$stu1->prideti1Akmeni();
$stu1->prideti2Akmeni();
$stu1->prideti1Akmeni();
$stu1->pridetiDaugAkmenu(3);
$stu2->prideti1Akmeni();
$stu2->prideti2Akmeni();

echo 'stu1:'. $stu1->kiekPririnktaAkmenu();
echo "\n";
echo 'stu2:'. $stu2->kiekPririnktaAkmenu();

echo "\n";
echo 'VISO:' . $stu2->kiekBendraiYraAkmenu();
echo "\n";
echo 'VISO:' . Kibiras2::kiekYraAkmenu();