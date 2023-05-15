<?php
//O'quv masalalarini aniqlovchi 10-40 gacha butun son berilgan. Son kiritilganda unga mos so'zlarda ifodalovchi programma tuzilsin.
// (“yigirmata masala", “o'n uchta masala" va h.k.)
echo "10 dan 40 gacha butun son kiriting: ";
$son = readline();

$a = floor($son/10);
$b = $son%10;

switch ($a){
    case 1: echo "o'n "; break;
    case 2: echo "yigirma "; break;
    case 3: echo "o'ttiz "; break;
    case 4: echo "qirq "; break;
}
switch ($b){
    case 1: echo "birta masala"; break;
    case 2: echo "ikkita masala"; break;
    case 3: echo "uchta masala"; break;
    case 4: echo "to'rtta masala"; break;
    case 5: echo "beshta masala"; break;
    case 6: echo "oltita masala"; break;
    case 7: echo "yettita masala"; break;
    case 8: echo "sakkizta masala"; break;
    case 9: echo "to'qqizta masala"; break;
}