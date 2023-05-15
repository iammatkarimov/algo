<?php
//Teng  tomonli uchburchakning elementlari quyidagi tartibda nomerlangan.
//1-tomoni a, 2-ichki chizilgan aylananing radiusi R1 = a √3/6, 3- tashqi chizilgan aylananing radiusi  R 2 =  2 R 1  ,
//4-yuzasi S = a2 √(3/4, elementlardan bittasi berilganda qolganlarini topuvchi programma tuzilsin.

echo "1-a tomoni, 2- R1 radius, 3-R2 radius, 4-S yuzasi: ";
$n = readline();
switch ($n) {
    case 1:
        echo "a = ";
        $a = readline();
        $r1 = $a * sqrt(3) / 6;
        $r2 = 2 * $r1;
        $s = $a * $a * sqrt(3) / 4;
        echo "R1 = " . $r1 . "\n";
        echo "R2 = " . $r2 . "\n";
        echo "S = " . $s . "\n";
        break;
    case 2:
        echo "R1 = ";
        $r1 = readline();
        $a = 6 * $r1 / sqrt(3);
        $r2 = 2 * $r1;
        $s = $a * $a * sqrt(3) / 4;
        echo "a = " . $a . "\n";
        echo "R2 = " . $r2 . "\n";
        echo "S = " . $s . "\n";
        break;
    case 3:
        echo "R2 = ";
        $r2 = readline();
        $r1 = $r2 / 2;
        $a = 6 * $r1 / sqrt(3);
        $s = $a * $a * sqrt(3) / 4;
        echo "a = " . $a . "\n";
        echo "R1 = " . $r1 . "\n";
        echo "S = " . $s . "\n";
        break;
    case 4:
        echo "S = ";
        $s = readline();
        $a = sqrt((4 * $s) / sqrt(3));
        $r1 = $a * sqrt(3) / 6;
        $r2 = 2 * $r1;
        echo "a = " . $a . "\n";
        echo "R1 = " . $r1 . "\n";
        echo "R2 = " . $r2 . "\n";
        break;
    default: echo "Xato";
}

