<?php
//Doiraning elementlari quyidagi tartibda nomerlangan. 1-radius R,   2-diametr D = 2R  ,3.
//  Uzunligi  L=2pR,    4-doiraning yuzasi S= pR2,
//  shu elementlardan bittasi berilganda qolganlarini topuvchi programma tuzilsin. p=3,14;
$pi = 3.14;

echo "1 - radius, 2 - diametr, 3 - uzunlik, 4 - doiraning yuzasi: ";
$n = readline();

switch ($n) {
    case 1:
        echo "R = ";
        $r = readline();
        $d = 2 * $r;
        $l = 2 * $pi * $r;
        $s = $pi * $r * $r;
        echo "D = " . $d . "\n";
        echo "L = " . $l . "\n";
        echo "S = " . $s . "\n";
        break;
    case 2:
        echo "D = ";
        $d = readline();
        $r = $d / 2;
        $l = 2 * $pi * $r;
        $s = $pi * $r * $r;
        echo "R = " . $r . "\n";
        echo "L = " . $l . "\n";
        echo "S = " . $s . "\n";
        break;
    case 3:
        echo "L = ";
        $l = readline();
        $r = $l / (2 * $pi);
        $d = 2 * $r;
        $s = $pi * $r * $r;
        echo "R = " . $r . "\n";
        echo "D = " . $d . "\n";
        echo "S = " . $s . "\n";
        break;
    case 4:
        echo "S = ";
        $s = readline();
        $r = sqrt($s / $pi);
        $d = 2 * $r;
        $l = $pi * 2 * $r;
        echo "R = " . $r . "\n";
        echo "D = " . $d . "\n";
        echo "L = " . $l . "\n";
        break;
    default:
        echo "Xato";
}

