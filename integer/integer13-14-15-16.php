<?php
// 1. Uch xonali son berilgan. Uning chapdan birinchi raqamini
// o’chirib o'ng tarafiga yozishdan hosil bo'lgan sonni aniqlovchi programma tuzilsin.

// 2. Uch xonali son berilgan. Uning o'ngdan birinchi raqamini
// o’chirib chap tarafiga yozishdan hosil bo'lgan sonni aniqlovchi programma tuzilsin

// 3. Uch xonali son berilgan. Uning o'nliklar xonasidagi raqam bilan yuzliklar xonasidagi raqamni almashtirishdan
// hosil bo'lgan sonni aniqlovchi programma tuzilsin. (Kirish =123; Natija = 213).

// 4. Uch xonali son berilgan. Uning o'nliklar xonasidagi raqam bilan birliklar xonasidagi raqamni
// almashtirishdan hosil bo'lgan sonni aniqlovchi programma tuzilsin. (Kirish =123; Natija = 132)

$son = readline();
$yuzlar = intval($son/100);
$onlar =intval(($son%100)/10);
$birlar = $son%10;
echo "1 = ".$onlar.$birlar.$yuzlar." 2 = ".$birlar.$yuzlar.$onlar." 3 = ".$onlar.$yuzlar.$birlar." 4 = ".$yuzlar.$birlar.$onlar;