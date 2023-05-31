<?php
//n butun soni berilgan (n > 1). Quyidagi ketma - ketlikning dastlabki n ta hadini chiqaruvchi programma tuzilsin.
// A1 = 1; A2 = 2;	AK = (AK_2 + 2*AK_1)/ 3;	K = 3,4,...
$n = readline();
$a = 1;
$b = 2;
echo $a;
if ($n > 1) {
    echo $b;
    for ($i = 0; $i < $n - 2; $i++) {
        $c = ($a + 2 * $b) / 3;
        $a = $b;
        $b = $c;
        echo $c."\n";
    }
} else {
    echo 'n>1 shartni qanoatlantirmaydi';
}