<?php
// 1. 999 dan katta bo'lgan son berilgan. Bir marta bo'lib butunni va bo'lib qoldiqni olish operatsiyasidan
// foydalanib berilgan sonni yuzliklar xonasidagi sonni aniqlovchi programma tuzilsin.

// 2. 999 dan katta bo'lgan son berilgan. Bir marta bo'lib butunni va bo'lib qoldiqni olish
// operatsiyasidan foydalanib berilgan sonni mingliklar xonasidagi sonni aniqlovchi programma tuzilsin

$son = readline();

$birlar = $son%10;
$onlar = intval($son/10)%10;
$yuzlar = intval($son/100)%10;
$minglar = intval($son/1000)%10;

echo "yuzlar = ".$yuzlar." minglar = ".$minglar;