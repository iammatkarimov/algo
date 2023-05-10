<?php
//Uchta son berilgan.
// Shu sonlarni avval kichigini keyin kattasini ekranga chiqaruvchi programma tuzilsin.
echo "a = ";
$a = readline();
echo "b = ";
$b = readline();
echo "c = ";
$c = readline();


$min =$a;
$max =$a;

$min = ($a<$b)?$a:$b;
$min = ($min<$c)?$min:$c;
$max = ($a<$b)?$b:$a;
$max = ($max<$c)?$c:$max;

echo "kichigi = ".$min.","." kattasi = ".$max;