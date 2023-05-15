<?php
//Uzinlik birliklari quyidagi tartibda berilgan. 1-desimetr, 2-kilometr, 3-metr, 4-millimeter, 5- santimetr.
// Uzunlik birligini bildiruvchi son berilgan (1-5 oraliqda) va shu birlikdagi kesma uzunligi berilgan (haqiqiy son).
// Kesmaning uzunligini metrlarda ifodalofchi programma tuzilsin.

echo "Uzunlikni kiriting = ";
$uzunlik = readline();
echo "1-desimetr, 2-kilometr, 3-metr, 4-millimeter, 5- santimetr: ";
$birlik = readline();
switch ($birlik) {
    case 1: echo $uzunlik . " desimetr = " . ($uzunlik / 10) . " metr"; break;
    case 2: echo $uzunlik . " kilometr = " . ($uzunlik * 1000) . " metr"; break;
    case 3: echo $uzunlik . " metr = " . ($uzunlik) . " metr"; break;
    case 4: echo $uzunlik . " millimetr = " . ($uzunlik / 1000) . " metr"; break;
    case 5: echo $uzunlik . " santimetr = " . ($uzunlik / 100) . " metr"; break;
    default: echo "Xato"; break;
}