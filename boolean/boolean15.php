<?php

// Uchta A, V, S butun sonlar berilgan. Jumlani rostlikka tekshiring:
// “A, V, S sonlardan faqat ikkitasi musbat son".

$a = readline();
$b = readline();
$c = readline();

if (($a > 0 && $b > 0 && $c < 0) || ($a < 0 && $b > 0 && $c > 0) || ($a > 0 && $b < 0 && $c > 0)) {
    echo "ikkitasi musbat";
} else {
    echo "musbat emas";
}