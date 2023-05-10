<?php
//Koordinatalar tekisligida butun son berilgan. Agar nuqta koordinata boshida yotsa, 0 chiqarilsin.
// Agar nuqta OX yoki OY o'qlarida joylashsa mos holda 1 va 2 chiqarilsin.
// Agar nuqta koordinata o'qida joylashmasa 3 chiqarilsin.


$x = readline();
$y = readline();

if ($x == 0 && $y == 0) {
    echo "0";
} elseif ($x == 0) {
    echo "2";
} elseif ($y == 0) {
    echo "1";
} else {
    echo "3";
}

