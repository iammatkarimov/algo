<?php
//Oy raqamini berilgan.
// Kiritilgan oy qaysi faslga tegishli ekanligini chiqaruvchi programma tuzilsin. (Masalan: 2 chi oy, “qish")
$oy = readline();
switch ($oy){
    case 1:
    case 2:
    case 12:
        echo "qish";
        break;
    case 3:
    case 4:
    case 5:
        echo "Bahor";
        break;
    case 6:
    case 7:
    case 8:
        echo "Yoz";
        break;
    case 9:
    case 10:
    case 11:
        echo "kuz";
        break;
    default:
        echo "noto'g'ri oy kiritildi";
}