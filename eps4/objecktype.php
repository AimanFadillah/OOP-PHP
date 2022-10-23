<?php 

// menggunakan Objeck type

class anime {

    // sebuah property
   public $judul = "judul",
          $genre = "genre",
          $durasi = "durasi",
          $pembuat = "pembuat",
          $rating = "rating";

    // menggunakan construct
    public function __construct($judul,$genre,$durasi,$pembuat,$rating){
       $this->judul = $judul;
       $this->genre = $genre;
       $this->durasi = $durasi;
       $this->pembuat = $pembuat;
       $this->rating = $rating; 
    }

    // sebuah method
    public function cap (){
        return "pembuat : $this->pembuat <br>
                rating : $this->rating";
    }

}

// Membuat ObjeckType
class tampilkan {
    public function infoanime (anime $produk){
        $cetak = "Anime : {$produk->judul} <br>
                  Genre : {$produk->genre} <br>
                  Durasi : {$produk->durasi} <br>
                           {$produk->cap() }";
        return $cetak;
    }

}


// menggunaka sebuah class
$anime_naruto = new anime ("naruto","action","25 menit","aiman","8,0");
$cetakanime = new tampilkan ();

// memanggil objeck
echo $cetakanime->infoanime($anime_naruto);


?>