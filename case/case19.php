<?php
//Sharq kalendarida 60 yillik davr qabul qilingan. Yil muchali 5 t rang (yashil,a qizil, sariq, oq va qora)
// va 12 ta hayvon (sichqon, sigir, yo'lbars, quyon, ajdar, ilon, ot, qo'y, maymun, tovuq, it va to'ngizlardan)
// nomlaring kombinatsiyasidan kelib chiqadi. Yilning raqamiga qarab uning muchalini aniqlovchi programma tuzilsin.
// 1984-davr boshi: “Yashil sichqon yili".


echo "Yil kiriting: ";
$year = readline();
$year -= 1983;
echo $year."\n";
$year %= 60;
echo $year."\n";
$rang = $year % 5;
$hayvon = $year % 12;

switch ($rang) {
    case 0:
        echo "Qora ";
        break;
    case 1:
        echo "Yashil ";
        break;
    case 2:
        echo "Qizil ";
        break;
    case 3:
        echo "Sariq ";
        break;
    case 4:
        echo "Oq ";
        break;
}

switch ($hayvon) {
    case 0:
        echo "To`ng`iz ";
        break;
    case 1:
        echo "Sichqon ";
        break;
    case 2:
        echo "Sigir ";
        break;
    case 3:
        echo "Yo`lbars ";
        break;
    case 4:
        echo "Quyon ";
        break;
    case 5:
        echo "Ajdar ";
        break;
    case 6:
        echo "Ilon ";
        break;
    case 7:
        echo "Ot ";
        break;
    case 8:
        echo "Qo`y ";
        break;
    case 9:
        echo "Maymun ";
        break;
    case 10:
        echo "Tovuq ";
        break;
    case 11:
        echo "It ";
        break;
}

echo "yili";
