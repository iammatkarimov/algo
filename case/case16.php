<?php
//  Yoshni yillarda aniqlovchi 20-69 gacha butun son berilgan.
// Son kiritilganda unga mos so'zlarda ifodalovchi programma tuzilsin.
// “yigirma yosh", “qirq uch yosh" va h.k.)
echo "20 dan - 69 gacha son kiriting: ";
$son = readline();
$a = floor($son/10);
$b = $son%10;

switch ($a){
    case 2: echo "yigirma "; break;
    case 3: echo "o'ttiz "; break;
    case 4: echo "qirq "; break;
    case 5: echo "ellik "; break;
    case 6: echo "oltmish "; break;
    default: echo "20-69 oraliqdan chiqmang";
}
switch ($b){
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