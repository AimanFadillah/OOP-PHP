<?php 

// menggunakan ABSTRACK
// abstarct digunakan agar sebuah class tidak dapat di instasiasi

abstract class anime {

    // [sebuah property]

   public   $judul = "judul",
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

    public function setdurasi($durasi){
        $this->durasi = $durasi;
    } 
   
    public function getdurasi(){
        return $this->durasi;
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

     // untuk mengakses visibility protected
     public function setgenre($genre){
        $this->genre = $genre;
    }

    public function getgenre(){
        return $this->genre;
    }


    // method
    public function special (){
        $cetak = parent::infoanime() . "<br> komen : {$this->komen} 😫😫😫";
        return $cetak;
    }
}

class cetak {
// property
   public $kumpulan = [];

// method
    public function dikumpul($animenya){
        $this->kumpulan[] = $animenya;
    }

    public function isikumpulan(){
        $str = "ISI PRODUK <br> <br>";

        foreach($this->kumpulan as $umpul){
            $str .= "<hr> {$umpul->special() } <hr>";
        }

        return $str;
    }
}


// memasang sebuah class
$anime_naruto = new action ("naruto","action","25 menit","aiman","8,0","gila banget");
$anime_death = new horror ("Death Note","Psyco","20 menit","aiman","9,0","Siapa Yang Ketakutan!!!!");
$anime_mob = new action ("Mob Psycho","action","24 menit","aiman","8,0","anjayyy mc nya gue banget");
$cetak = new cetak();

// memanggil objeck
$cetak->dikumpul($anime_naruto);
$cetak->dikumpul($anime_death);
$cetak->dikumpul($anime_mob);
echo $cetak->isikumpulan();


?>