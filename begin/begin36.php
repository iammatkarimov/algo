<?php
//Birinchi avtomabilning tezligi  V1 km / soat   ikkinchisiniki,
// V2 km / soat   ular orasidagi masofa   S. Ular biri-biridan uzoqlasha boshlasa
// T vaqtdan keyin ular orasidagi masofani aniqlaydigan programma tuzilsin.
$v1 = 100; //km/soat
$v2 = 150; //km/soat
$t = 2; //soat
$s1 = 100;
$s2 = $t*($v1+$v2)+$s1;
echo $s2;