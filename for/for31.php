<?php
//n butun soni berilgan (n > 0).
// Quyidagi ketma - ketlikning dastlabki n ta hadini chiqaruvchi programma tuzilsin.
// A0 = 2;	AK = 2 + 1 / AK1; K =1,2,...
$n = readline();
$a = 2;
for ($i = 1; $i <= $n; $i++) {
    $a = 2 + 1 / $a;
    echo 'a'.$i.'='.$a."\n";
}