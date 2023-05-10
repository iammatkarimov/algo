<?php
//Uchta butun son berilgan.
// Shu sonlarni ikkitasi o'zaro teng, qolgan bittasini tartib raqami aniqlansin.

//To'rtta butun son berilgan.
// Shu sonlarni uchtasi o'zaro teng, qolgan bittasini tartib raqami aniqlansin.
echo "a = ";
$a = readline();
echo "b = ";
$b = readline();
echo "c = ";
$c = readline();
echo "d = ";
$d = readline();

if ($a==$b && $b==$c){
    echo $d."- tartib raqami 4";
}
elseif ($a==$b && $b==$d){
    echo $c."- tartib raqami 3";
}
elseif ($a==$c && $c==$d){
    echo $b."- tartib raqami 2";
}
else{
    echo $a."- tartib raqami 1";
}