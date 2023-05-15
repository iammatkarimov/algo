<?php
//O'yin kartasi turlari berilgan 1-g'isht, 2-olma, 3-chillak, 4-qarg'a.
// 10 lik kartadan katta kartalar quyidagi qiymatlarni o'zlashtirgan:
// 11-valet, 12-dama, 13-qirol, 14-tuz. Ikkita butun son berilgan N-karta qiymat
//  ( 6 ≤ N ≤  14 ) M-karta turi   ( 1 ≤  M ≤4  ) kiritilganda karta nomlarini
// (masalan: olti qarg'a) chiqarib beruvchi programma tuzilsin.
echo "1 - g'isht, 2 - olma , 3 - chillak , 4 - qarg'a: ";
$k = readline();
echo "Karta qiymatini kiriting: ";
$n = readline();
switch ($n) {
    case 6:
        echo "olti ";
        break;
    case 7:
        echo "yetti ";
        break;
    case 8:
        echo "sakkiz ";
        break;
    case 9:
        echo "to'qqiz ";
        break;
    case 10:
        echo "o'n ";
        break;
    case 11:
        echo "valent ";
        break;
    case 12:
        echo "dama ";
        break;
    case 13:
        echo "qirol ";
        break;
    case 14:
        echo "tuz ";
        break;
}
switch ($k) {
    case 1:
        echo "g'isht";
        break;
    case 2:
        echo "olma";
        break;
    case 3:
        echo "chillak";
        break;
    case 4:
        echo "qarg'a";
        break;
}
