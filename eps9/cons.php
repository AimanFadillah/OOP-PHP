<?php 

// mennggunankan CONST

// define tidak bisa digunakan didalam kelas
define("nama","aiman");
echo nama . "<br>";


// const bisa menggunakan class
class nilai {
   const angka = 12 ;
}
echo nilai::angka;

?>