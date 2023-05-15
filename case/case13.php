<?php
//Teng yonli uchburchakning elementlari quyidagi tartibda nomerlangan. 1-kateti, 2-gipotenuza c=a√2  , 3-gipotenuzaga tushirilgan balandlik h = c / 2 ,  4-yuzasi S=( c∙h)/2
// Shu elementlardan bittasi berilganda qolganlarini topuvchi programma tuzilsin.

$pi = 3.14;
echo "1 - katet, 2 - gipotenuza, 3 - balandlik: ";
$n = readline();
switch ($n) {
    case 1:
        echo "a = ";
        $a = readline();
        $c = $a * sqrt(2);
        $h = $c / 2;
        $s = $c * $h / 2;
        echo "c = " . $c . "\n";
        echo "h = " . $h . "\n";
        echo "s = " . $s . "\n";
        break;
    case 2:
        echo "c = ";
        $c = readline();
        $a = $c / sqrt(2);
        $h = $c / 2;
        $s = $c * $h / 2;
        echo "a = " . $a . "\n";
        echo "h = " . $h . "\n";
        echo "s = " . $s . "\n";
        break;
    case 3:
        echo "h = ";
        $h = readline();
        $c = 2 * $h;
        $a = $c / sqrt(2);
        $s = $c * $h / 2;
        echo "a = " . $a . "\n";
        echo "c = " . $c . "\n";
        echo "s = " . $s . "\n";
        break;
    default:
        echo "Xato";
}