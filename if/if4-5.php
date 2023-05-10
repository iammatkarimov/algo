<?php
//if4. Uchta butun son berilgan.
// Shu sonlar orasidan nechta musbat son borligini aniqlovchi programma tuzilsin.
//if5. Uchta butun son berilgan.
// Shu sonlar orasidan nechta musbat va manfiy son borligini aniqlovchi programma tuzilsin.
$a = readline();
$b = readline();
$c = readline();
$musbat = 0;
$manfiy = 0;
if ($a>0){
    $musbat++;
}
else{
    $manfiy++;
}
if ($b>0){
    $musbat++;
}
else{
    $manfiy++;
}
if ($c>0){
    $musbat++;
}
else{
    $manfiy++;
}
echo "musbat = ".$musbat.","." manfiy = ".$manfiy;

