<?php

require 'init.php';

use Anime\User as A_User;
use project\user as P_user;

// memasang sebuah objeck
// $anime_naruto = new action ("naruto","action","25 menit","aiman","8,0","gila banget");
// $anime_death = new horror ("Death Note","Psyco","20 menit","aiman","9,0","Siapa Yang Ketakutan!!!!");
// $anime_mob = new action ("Mob Psycho","action","24 menit","aiman","8,0","anjayyy mc nya gue banget");
// $cetak = new cetak();

// // memanggil objeck
// $cetak->dikumpul($anime_naruto);
// $cetak->dikumpul($anime_death);
// $cetak->dikumpul($anime_mob);
// echo $cetak->isikumpulan();

// echo "<br>";

new A_User();
echo "<hr>";
new P_User();




?>
