<?php
//A, B, C haqiqiy sonlari berilgan. Agar berilgan sonlar o'sish tartibida berilgan bo'lsa, sonlarni ikkilantiring, aks holda sonlarni ishorasi o’zgartirilsin.
// A, B, C ning qiymatlari ekranga chiqarilsin.
echo "a = ";
$a = readline();
echo "b = ";
$b = readline();
echo "c = ";
$c = readline();

if (($a<$b && $b<$c) || ($a>$b && $b>$c)){
    $a = 2*$a;
    $b = 2*$b;
    $c = 2*$c;
}
else{
    $a = -$a;
    $b = -$b;
    $c = -$c;
}
echo $a." ".$b." ".$c;