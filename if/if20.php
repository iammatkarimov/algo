<?php
//Sonlar o'qida uchta A, B, C nuqtalar berilgan.
// A nuqtaga eng yaqin nuqta va ular orasidagi masofa topilsin.
echo "a = ";
$a = readline();
echo "b = ";
$b = readline();
echo "c = ";
$c = readline();
if (abs($b-$a)<abs($c-$a)){
    echo "b = ".$b.","." masofa = ".($b-$a);
}
else{
    echo "c = ".$c.","." masofa = ".($c-$a);
}
