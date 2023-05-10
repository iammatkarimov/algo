<?php
//if6. Ikkita butun son berilgan.
// Shu sonlarning kattasini aniqlovchi programma tuzilsin.
//if7. Ikkita butun son berilgan.
// Shu sonlarning kichigini tartib raqamini aniqlovchi programma tuzilsin.
//if8. Ikkita butun son berilgan.
// Shu sonlarning avval kattasini keyin kichigini ekranga chiqaruvchi programma tuzilsin.
echo "a = ";
$a = readline();
echo "b = ";
$b = readline();

if ($a>$b){
    echo "Kattasi = ".$a." Kichigi = ".$b.",";
    echo "tartib raqami = 2 ";
}
elseif($a<$b){
    echo "Kattasi = ".$b." Kichigi = ".$a.",";
    echo "tartib raqami = 1 ";
}
