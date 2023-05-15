<?php
//A, B haqiqiy va amal butun soni berilgan. A va B sonlari ustida arifmetik amallar bajaruvchi progaramma tuzilsin.
// amal quyidagi qiymatlarni qabul qiladi: 1-qo'shish, 2-ayirish, 3-bo'lish, 4- ko'paytirish.

echo "Amal kiriting (+, -, *, /) \n";
$amal = readline();
echo "2 ta sonni kiriting: \n";
$son1 = readline();
$son2 = readline();

switch ($amal) {
    case '+':
        echo $son1 . " + " . $son2 . " = " . ($son1 + $son2);
        break;
    case '-':
        echo $son1 . " - " . $son2 . " = " . ($son1 - $son2);
        break;
    case '*':
        echo $son1 . " * " . $son2 . " = " . ($son1 * $son2);
        break;
    case '/':
        echo $son1 . " / " . $son2 . " = " . ($son1 / $son2);
        break;
    default:
        echo "Xato! Bunday amal yo'q";
        break;
}
