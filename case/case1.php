<?php
//1-7 gacha bo’lgan butun sonlar berilgan.
// Kiritilgan songa mos ravishda hafta kunlarini so’zda ifodalovchi programma tuzilsin. (1-Dushanba,2- Chorshanba, h.k)

$n = readline();

switch ($n){
    case 1:
        echo "Dushanba";
        break;
    case 2:
        echo "Seshanba";
        break;
    case 3:
        echo "Chorshanba";
        break;
    case 4:
        echo "Payshanba";
        break;
    case 5:
        echo "Juma";
        break;
    case 6:
        echo "Shanba";
        break;
    case 7:
        echo "Yakshanba";
        break;
    default:
        echo "1 dan 7 gacha kiriting";
}