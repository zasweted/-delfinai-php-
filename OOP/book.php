<?php

require __DIR__ .'/vendor/autoload.php';


$b1 = new Petro\Read;
$b2 = new Antano\Belekas\Read;

echo $b1->funBook();
echo '<br>';
echo $b2->sadBook();
echo '<br>';
