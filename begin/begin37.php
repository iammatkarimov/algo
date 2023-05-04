<?php
//Birinchi avtomabilning tezligi V1 km/soat, ikkinchisiniki V2 km/soat ,ular orasidagi masofa S.
//Ular biri—biri tomonga harakatlana boshlasa T vaqtdan
// keyin ular orasidagi masofani aniqlaydigan programma tuzilsin.
$v1 = 50; //km/soat
$v2 = 60; //km/soat
$t =1; //soat
$s1 = 200; //km
$s2 = $s1-$t*($v1+$v2); //km
echo $s2."km";