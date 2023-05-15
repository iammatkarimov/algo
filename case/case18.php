<?php
//100-999 gacha oraliqdagi sonlarni so'zlarda ifodalovchi programma tuzilsin.
// (masalan: 123- :‘biryuz yigirma uch”).
echo "100 dan 999 oraliqda butun son kiriting: ";
$son = readline();

$a = floor($son/100);
$b = floor($son/10)%10;
$c = $son%10;
switch ($a){
    case 1: echo "bir yuz "; break;
    case 2: echo "ikki yuz "; break;
    case 3: echo "uch yuz "; break;
    case 4: echo "to'rt yuz "; break;
    case 5: echo "besh yuz "; break;
    case 6: echo "olti yuz "; break;
    case 7: echo "yetti yuz "; break;
    case 8: echo "sakkiz yuz "; break;
    case 9: echo "to'qqiz yuz "; break;
}
switch ($b){
    case 1: echo "o'n "; break;
    case 2: echo "yigirma "; break;
    case 3: echo "o'ttiz "; break;
    case 4: echo "qirq "; break;
    case 5: echo "ellik "; break;
    case 6: echo "oltmish "; break;
    case 7: echo "yetmish "; break;
    case 8: echo "sakson "; break;
    case 9: echo "to'qson "; break;
}
switch ($c){
    case 1: echo "bir"; break;
    case 2: echo "ikki"; break;
    case 3: echo "uch"; break;
    case 4: echo "to'rt"; break;
    case 5: echo "besh"; break;
    case 6: echo "olti"; break;
    case 7: echo "yetti"; break;
    case 8: echo "sakkiz"; break;
    case 9: echo "to'qqiz"; break;
}