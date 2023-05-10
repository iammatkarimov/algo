<?php
//Uchta son berilgan.
// Shu sonlarning yig'indisi eng katta bo’ladigan ikkitasini ekranga chiqaruvchi programma tuzilsin.
echo "a = ";
$a = readline();
echo "b = ";
$b = readline();
echo "c = ";
$c = readline();

$max =$a;
$max = ($a<$b)?$b:$a;
$max = ($max<$c)?$c:$max;

if(($a>$b&&$b>$c)||($c>$b&&$b>$a)){
    echo $b." ".$max;
} elseif (($a > $c && $c > $b) || ($b > $c && $c > $a)) {
    echo $c." ".$max;
} else {
    echo $a." ".$max;
}