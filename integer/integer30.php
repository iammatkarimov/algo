<?php
//Qaysidir yil berilgan. Berilgan yilning qaysi yuz yillikka kirishini aniqlovchi
// programma tuzilsin. (Masalan: 20 - yuz yillikning boshi 1901 yil).

$yil = readline();
$asr = intval($yil/100)+1;
echo $asr." - asr";