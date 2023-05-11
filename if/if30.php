<?php
//1-999 oraliqdagi sonlar berilgan. Berilgan sonni "ikki xonali juft son", "uch xonali toq son"
// va h.k.ekranga yozadigan programma tuzilsin.
$n = readline('N=');

if (floor($n / 10) == 0) {
    echo 'Bir xonali ';
    if ($n % 2 == 0) {
        echo 'juft son';
    } else {
        echo 'toq son';
    }
} elseif (floor($n / 10) <= 9) {
    echo 'Ikki xonali ';
    if ($n % 2 == 0) {
        echo 'juft son';
    } else {
        echo 'toq son';
    }
} elseif (floor($n / 100) <= 9) {
    echo 'Uch xonali ';
    if ($n % 2 == 0) {
        echo 'juft son';
    } else {
        echo 'toq son';
    }
}
else {
    echo '1 dan 999 gacha oraliqdagi son kiriting';
}