<?php

$p = ['S', 'M', 'L', 'XL'][rand(0, 3)];


echo 'Senukas atnese: ' .$p;

// if($p == 'S'){
//     echo '<br>' . 'Tikrinam S';
// }
// if($p == 'S' || $p == 'M'){
//     echo '<br>' . 'Tikrinam M';
// }
// if($p == 'S' || $p == 'M' || $p =='L'){
//     echo '<br>' . 'Tikrinam L';
// }
// if($p == 'S' || $p == 'M' || $p =='L' || $p == 'XL'){
//     echo '<br>' . 'Tikrinam XL';
// }


switch($p) {
    case 'S' : echo '<br> Tikrinam S'; 
    case 'M' : echo '<br> Tikrinam M'; 
    case 'L' : echo '<br> Tikrinam L'; 
    case 'XL' : echo '<br> Tikrinam XL'; 
}