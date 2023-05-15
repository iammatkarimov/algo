<?php
//Og'irlik birliklari quyidagi tartibda berilgan.1-kilogramm, 2-milligramm, 3-gramm, 4-tonna, 5- sentner.
// Og'irlik birligini bildiruvchi soni berilgan va shu birlikdagi og'irlik qiymati berilgan.
// Og'irlikni kilogramda ifodalofchi programma tuzilsin
echo "Og'irlikni kiriting = ";
$ogirlik = readline();
echo "Og'irlik birligini kiriting:(1-kilogramm, 2-milligramm, 3-gramm, 4-tonna, 5- sentner) = ";
$birlik = readline();
switch ($birlik){
    case 1:
        echo "Og'irligi = ".$ogirlik." kilogramm = ".$ogirlik." kilogramm"; break;
    case 2:
        echo "Og'irligi = ".$ogirlik." milligramm = ".($ogirlik/1000000)." kilogramm"; break;
    case 3:
        echo "Og'irligi = ".$ogirlik." gramm = ".($ogirlik/1000)." kilogramm"; break;
    case 4:
        echo "Og'irligi = ".$ogirlik." tonna = ".($ogirlik*1000)." kilogramm"; break;
    case 5:
        echo "Og'irligi = ".$ogirlik." sentner = ".($ogirlik/100)." kilogramm"; break;
    default:
        echo "Xato!";
}
