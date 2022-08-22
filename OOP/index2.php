<?php
echo '<pre>';
require __DIR__ . '/Nso.php';
require __DIR__ . '/Tv.php';
require __DIR__ . '/Telikas.php';

$nso1 = new Nso;

$tv1 = new Tv('Pink', '40"');
echo "\n";
$tv1->showParams();


$tv1->channel;


echo $tv1->size;
echo "\n";
echo $tv1->size = 'asdfasdfadsf';