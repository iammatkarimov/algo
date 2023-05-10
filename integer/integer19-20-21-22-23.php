<?php
//Integer 19. Kun boshidan boshlab N sekund vaqt o'tti.
//Kun boshidan boshlab qancha minut to’la o'tganligini aniqlovchi programma tuzilsin.
//Integer 20. Kun boshidan boshlab N sekund vaqt o'tti.
//Kun boshidan boshlab qancha to’la soat o'tganligini aniqlovchi programma tuzilsin.
//Integer 21. Kun boshidan boshlab N sekund vaqt o'tti.
//Kun boshidan boshlab qancha minut va sekund o’tganini aniqlovchi programma tuzilsin.
//Integer 22. Kun boshidan boshlab N sekund vaqt o'tti.
//Kun boshidan boshlab qancha soat va sekund o’tganini aniqlovchi programma tuzilsin.
//Integer 23. Kun boshidan boshlab N sekund vaqt o'tti.
//Kun boshidan boshlab qancha soat, minut va sekund o’tganini aniqlovchi programma tuzilsin.
$n = readline();

$minut = intval($n/60);
$soat = intval($n/3600);
$sek = $n%60;
echo "soat = ".$soat." minut = ".$minut." sekund = ".$sek;
