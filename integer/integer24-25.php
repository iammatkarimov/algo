<?php
//Integer 24. Hafta kunlari quyidagicha tartibda berilgan. 0-yakshanba, 1-dushanba, 2-seshanba, 3- chorshanba, 4-payshanba, 5-juma, 6-shanba.
// 1-365 oraliqda yotuvchi K soni berilgan. Agar 1-yanvar dushanba bo’lsa, kiritilgan K- kun haftaning qaysi kuniga to'g'ri kelishini aniqlovchi programma tuzilsin.

//Integer 25. Hafta kunlari quyidagicha tartibda berilgan. 0-yakshanba, 1-dushanba, 2-seshanba, 3- chorshanba, 4-payshanba, 5-juma, 6-shanba.
// 1-365 oraliqda yotuvchi K soni berilgan. Agar 1-yanvar payshanba bo’lsa, kiritilgan K - kun haftaning qaysi kuniga to'g'ri kelishini aniqlovchi programma tuzilsin.

$n = readline();
echo "1-yanvar dushanba bo'lsa = ".($n%7).","." 1-yanvar payshanba bo'lsa = ".(($n+3)%7);