<?php
//n butun soni berilgan (n > 0).
// Quyidagi yig’indini hisoblovchi programma tuzilsin. S = n2 +(n+1)2+(n+2)2 + ... (2*n)2
$n = readline();
$s = 0;

for ($i=1; $i<=2*$n; $i++){
    $s+=$i*$i;
}
echo $s;