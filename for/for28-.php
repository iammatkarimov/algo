<?php
//n butun soni va x haqiqiy soni berilgan (n > 0, |x| < 1). Quyidagi yig’indini hisoblovchi programma tuzilsin.
//1+X/2-1 *x2/(2 *4) + 1*3*x3/(2*4*6)-... + (-1)n-1  *1*3* ...*(2*n-3)*xn/(2*4*..*(2*n))
$n = readline();
$x = readline();
$s = 1;
$l = 1;
$p = 1;
$ishora=-1;
if (($n < 0) && (abs($x) > 1)){
    exit("n 0 dan katta bo'lsin");
} else {
    for ($i = 1; $i < $n; $i++) {
        $l *= 2*$i-3;
        $p *=2*$i;
        $s = $s + $ishora*$l *  pow($x, $i)  / $p;
        echo $ishora*$l .", ". $i .", ".  $p."\n";
        $ishora*=-1;
    }
}
echo $s."\n";