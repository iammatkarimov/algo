<?php
//Uchta son berilgan. Shu sonlarni o'ratachasi
// (ya’ni katta va kichik sonlar orasidagi son) ni aniqlovchi programma tuzilsin

echo "a = ";
$a = readline();
echo "b = ";
$b = readline();
echo "c = ";
$c = readline();


if (($a > $b && $b > $c) || ($c > $b && $b > $a)) {
    echo $b;
} elseif (($a > $c && $c > $b) || ($b > $c && $c > $a)) {
    echo $c;
} else {
    echo $a;
}







