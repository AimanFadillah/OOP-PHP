<?php 

// menggunakan INHERITANCE

class anime {

    // sebuah property
   public $judul = "judul",
          $genre = "genre",
          $durasi = "durasi",
          $pembuat = "pembuat",
          $rating = "rating",
          $komenH = "komen special",
          $komenA = "komen special";

    // menggunakan construct
    public function __construct($judul,$genre,$durasi,$pembuat,$rating,$komenH,$komenA){
       $this->judul = $judul;
       $this->genre = $genre;
       $this->durasi = $durasi;
       $this->pembuat = $pembuat;
       $this->rating = $rating; 
       $this->komenH = $komenH;
       $this->komenA = $komenA;
    }

    // sebuah method
    public function cap (){
        return "pembuat : $this->pembuat <br>
                rating : $this->rating";
    }

    public function infoanime (){
        $cetak = "Anime : {$this->judul} <br>
                  Genre : {$this->genre} <br>
                  Durasi : {$this->durasi} <br>
                           {$this->cap() }";
        return $cetak;
    }
}

// Membuat inharitance 

// extends ini menandakan orang tuanya adalah class anime dan anaknya adalah class komenH
class action extends anime {
    public function special (){
        $cetak = "Anime : {$this->judul} <br>
        Genre : {$this->genre} <br>
        Durasi : {$this->durasi} <br>
                 {$this->cap() } <br>
        {$this->komenH} ";
        return $cetak;
    }
}

class horror extends anime{
    public function special (){
        $cetak = "
        Anime : {$this->judul} <br>
        Genre : {$this->genre} <br>
        Durasi : {$this->durasi} <br>
                 {$this->cap() } <br>
                {$this->komenA} ";
        return $cetak;
    }
}


// memasang sebuah class
$anime_naruto = new action ("naruto","action","25 menit","aiman","8,0","Gilaa Epic",null);
$anime_death = new horror ("Death Note","Psyco","20 menit","aiman","9,0",null,"Siapa Yang Ketakutan!!!!");

// memanggil objeck
echo $anime_naruto->special();
echo "<br><br>";
echo $anime_death->special();

?>