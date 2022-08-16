<?php

echo '<pre>';
// $mas = ['balta', 9 => 'juoda', 'raudona'];

// $mas['super'] = 'super kate';

// $mas[] = 'kate';

// $mas[7] = 'suo';

// $mas['0a'] = 'dramblys';

// $mas[] = 'kate';

// echo count($mas) . '<br>';

// print_r($mas);

// foreach(range(1, 5) as $val) {
//     echo $val . "\n";
// }

// $colors = ['red', 'green', 'blue', 'yellow'];

// foreach($colors as $index => $val){
//     echo 'Indeksas: ' . $index . 'Reiksme: ' . $val . '<br>';
// }


// $colors = ['red', 'green', 'blue', 'yellow'];
// // print_r($colors);
// // foreach($colors as &$val){
// //     $val = 'black';
// // }



// foreach($colors as &$val){
    
// }
// unset($val);
// foreach($colors as $val){
   
// }
// print_r($colors);

$colors = [
    ['red', 'green', 'blue', 'yellow'],
    ['dramblys', 'bebras', 'briedis', 'barsukas', 'traktorius'],
    [72, 12],
];

// echo $colors[1][0];

foreach($colors as $stalcius){
    foreach($stalcius as $item){
        echo "$item\n";
    }
}

$new =[];
$count = 0;

foreach(range(0, 2)as $a){
    foreach(range(0, 2)as $b){
        $new[$a][$b] = ++$count;
    }
}

print_r($new);