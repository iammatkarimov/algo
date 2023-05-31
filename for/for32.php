<?php
//n butun soni berilgan (n > 0).
// Quyidagi ketma - ketlikning dastlabki n ta hadini chiqaruvchi programma tuzilsin.
// A0 = 1;	Ak = (Ak.1 + 1)/K; K = 1,2,...
$n = readline();
$a = 1;
for ($i = 1; $i <= $n; $i++) {
    $a = ($a+1) / $a;
    echo 'a'.$i.'='.$a."\n";
}