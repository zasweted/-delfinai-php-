<?php
echo '<pre>';

require __DIR__ . '/MarsoPalydovas.php';
require __DIR__ . '/Tenisininkas.php';

// $p1 = Kosmosas\MarsoPalydovas::create();
// $p2 = Kosmosas\MarsoPalydovas::create();
// $p3 = Kosmosas\MarsoPalydovas::create();
// $p4 = Kosmosas\MarsoPalydovas::create();

// var_dump($p1);
// var_dump($p2);
// var_dump($p3);
// var_dump($p4);

$z1 = new Tenisininkas('Jonas');
$z2 = new Tenisininkas('Petras');


Tenisininkas::zaidimoPradzia();

$z1->perduotiKamuoliuka();
$z2->perduotiKamuoliuka();
$z1->perduotiKamuoliuka();
$z2->perduotiKamuoliuka();
$z1->perduotiKamuoliuka();
$z2->perduotiKamuoliuka();
$z1->perduotiKamuoliuka();
$z2->perduotiKamuoliuka();