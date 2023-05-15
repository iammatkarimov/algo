<?php
//Robot faqat to'rtta tomonga ko'cha oladi(v-shimol, “j-janub, q-sharq, g'-g’arb) va
// uchta raqamli kamanda: 0-harakni davom ettir, 1-chapga buril, 2-o'ngga buril.
// Y - robot yo'nalishi va K - kamanda berilgan.
// Berilgan kamanda bajarilgandan keying robot holatini aniqlovchi programma tuzilsin.
echo "robot yo'nalishini tanlang: ";
$y = readline();
echo "komandani tanlang: ";
$k = readline();
switch ($y) {
    case 'v':
        echo "shimol ";
        break;
    case 'j':
        echo "janub ";
        break;
    case 'q':
        echo "sharq ";
        break;
    case "g'":
        echo "g'arb ";
        break;
    default:
        echo "bunday yo'nalish yo'q ";
}
switch ($k) {
    case 0:
        echo "harakatni davom ettir";
        break;
    case 1:
        echo "chapga buril";
        break;
    case 2:
        echo "o'ngga buril";
        break;
    default:
        echo "bunday komanda yo'q";
}