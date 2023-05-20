<?php
//n butun soni berilgan (n > 0).
// Quyidagi yig’indini hisoblovchi programma tuzilsin.
// S = 1.1 -1.2 + 1.3 -... (n ta qo’shiluvchi, ishoralar almashib keladi.
// Shart operatoridan foydalanmang)
$n = readline();
$s = 0;

for ($i=11; $i<$n+11; $i++){
    $s+=$i/10*(-1)**($i-1);
}
echo $s;
