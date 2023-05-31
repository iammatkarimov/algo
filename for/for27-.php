<?php
//n butun soni va x haqiqiy soni berilgan (n > 0, |x| < 1). Quyidagi yig’indini hisoblovchi programma tuzilsin.
//x + 1 * x3 / (2 * 3) + 1 *3*x5 / (2*4*5) + ... + 1*3* ...*(2’n-1)*x2n+1 /(2*4’..*(2*n)*(2*n+1))
$n = readline();
$x = readline();
$s = $x;
$l=1;
$p=1;
if (($n < 0) && (abs($x)>1)) {
    exit("n 0 dan katta bo'lsin");
} else {
    for ($i=1; $i<2*$n-1; $i+=2) {
        $l*=$i;
        $p=$p*($i+1);
        $s=$s+$l*pow($x,($i+2))/($p*($i+2));
    }
}
echo $s;