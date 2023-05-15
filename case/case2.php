<?php
//K butun soni berilgan. Baho natijalarini chiqaruvchi programma tuzing.(1-yomon, 2-qoniqarsiz, 3-qoniqarli, 4-yahshi, 5-a’lo).
// Agar k soni 1-5 gacha oraliqqa tegishli bo'lmasa :!xato,! deb chiqarilsin.

$k = readline();
switch ($k){
    case 1:
        echo "yomon";
        break;
    case 2:
        echo "qoniqarsiz";
        break;
    case 3:
        echo "qoniqarli";
        break;
    case 4:
        echo "yaxshi";
        break;
    case 5:
        echo "alo";
        break;
    default:
        echo "xato";
}