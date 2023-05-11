<?php
//Butun son berilgan.
// Berilgan sonni “musbat toq son", "manfiy juft son", "son nolga teng" va h.k.
// ekranga yozadigan programma tuzilsin.
$n = readline();

if ($n == 0) {
    echo 'son nolga teng';
} elseif ($n > 0) {
    if ($n % 2 == 0) {
        echo 'musbat juft son';
    } else {
        echo 'musbat toq son';
    }
} else {
    if ($n % 2 == 0) {
        echo 'Manfiy juft son';
    } else {
        echo 'Manfiy toq son';
    }
}