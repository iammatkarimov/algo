<?php
//Lokatr dunyoning bir tomoniga qaratilgan(v-shimol, “f-janub, “q"-sharq, :g-g’arb) va
// uchta raqamli kamanda: 0-o'ngga buril, 1-chapga buril,
// 2-burilish 180°. S - lakatrning boshlang'ich holati va K1, K2 - kamandalar berilgan.
// Berilgan kamanda bajarilgandan keying lakatr holatini aniqlovchi programma tuzilsin.
$k1 = readline();
$k2 = readline();
switch ($k1){
    case "v":
        echo "shimolga "; break;
    case "f":
        echo "janubga "; break;
    case "q":
        echo "sharqga "; break;
    case "g":
        echo "g'arbga "; break;
    default:
        echo "bunday tomon yo'q ";
}
switch ($k2){
    case 0:
        echo "o'nga buriling "; break;
    case 1:
        echo 'chapga buriling '; break;
    case 2:
        echo "180 gradusga buriling "; break;
    default:
        echo "bunday burilish yo'q ";
}