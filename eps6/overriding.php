<?php 

// menggunakan OVERRIDING

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

    // membuat fungsi untuk mencetak sesuatu
    public function infoanime (){
        $cetak = "Anime : {$this->judul} <br>
                  Genre : {$this->genre} <br>
                  Durasi : {$this->durasi} <br>
                           {$this->cap() }";
        return $cetak;
    }
}

// Membuat overriding

class action extends anime {
    // property
    public $komen = "komen";

    // construct
    public function __construct($judul,$genre,$durasi,$pembuat,$rating,$komen){
        
        parent::__construct($judul,$genre,$durasi,$pembuat,$rating);

        $this->komen = $komen;
        
    }

    // method
    public function special (){
        $cetak = parent::infoanime() ."<br> komen : {$this->komen} 😎😎😎";
        return $cetak;
    }
}

class horror extends anime{
    // property
    public $komen = "komen";

    // construct
    public function __construct($judul,$genre,$durasi,$pembuat,$rating,$komen){
        
        parent::__construct($judul,$genre,$durasi,$pembuat,$rating);

        $this->komen = $komen;
        
    }

    // method
    public function special (){
        $cetak = parent::infoanime() . "<br> komen : {$this->komen} 😫😫😫";
        return $cetak;
    }
}


// memasang sebuah class
$anime_naruto = new action ("naruto","action","25 menit","aiman","8,0","gila banget");
$anime_death = new horror ("Death Note","Psyco","20 menit","aiman","9,0","Siapa Yang Ketakutan!!!!");

// memanggil objeck
echo $anime_naruto->special();
echo "<br><br>";
echo $anime_death->special();

?>