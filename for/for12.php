<?php
//n butun soni berilgan (n > 0).
// Quyidagi ko’paytmani hisoblovchi programma tuzilsin. S = 1.1 * 1.2 * 1.3 *... (n ta ko’payuvchi)
$n = readline();
$s = 1;

for ($i=11; $i<$n+11; $i++){
    echo "i = ".$i."\n";
    $s*=$i/10;
    echo "s= ".$s." , ";
}
echo $s;