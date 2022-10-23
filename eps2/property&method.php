<?php 


// membuat sebuah property dan method
class film {

    // sebuah property
   public $judul = "judul",
          $genre = "genre",
          $durasi = "durasi",
          $pembuat = "pembuat",
          $rating = "rating";

    // membuat method
    public function cap (){
        return "pembuat : $this->pembuat <br>
                rating : $this->rating";
    }

}


// menggunaka sebuah class
$film_batman = new film ;

$film_batman->judul = "the batman" ;
$film_batman->genre = "gore";
$film_batman->durasi = "2 jam";
$film_batman->pembuat = "zack snyder";
$film_batman->rating = "8,5";

echo "nama film : $film_batman->judul <br> 
      genre film : $film_batman->genre <br>
      durasi film : $film_batman->durasi <br>     
    ";

// memanggil method cap
echo $film_batman->cap();




 


?>