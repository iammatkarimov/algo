<?php
//A, b, c sonlar beilgan (A soni noldan farqli).
// D=B2-4AC diskerminantdan foydalanib, jumlani rostlikka tekshiring:
// “Ax2+Bx+C=0 kvadrat tenglama haqiqiy ildizga ega".
$a = readline();
$b = readline();
$c = readline();
$d = -$b*$b-4*$a*$c;
if ($d>=0){
    echo "kvadrat tenglama haqiqiy ildizga ega";
}
else{
    echo "bo'sh to'plam";
}