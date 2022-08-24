<?php

require __DIR__ . '/01/Read.php';
require __DIR__ . '/02/Read.php';

$b1 = new Petro\Read;
$b2 = new Antano\Read;

$b1->funBook();
echo '<br>';
$b2->sadBook();
echo '<br>';
