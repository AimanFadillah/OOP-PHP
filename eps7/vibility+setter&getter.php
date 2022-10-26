<?php 

// menggunakan VISIBILITY & SETTER dan GETTER

class anime {

    // [sebuah property]

    // ----------------------------------------------------->
    // public bisa diakses diluar kelas sekali pun
   public    $judul = "judul";
    // protected hanya bisa diakses diclassnya dan keturunan
   protected $genre = "genre";
    // private hanya bisa diakses diclassnya sendiri   
   private   $durasi = "durasi";
    // ----------------------------------------------------->

   public    $pembuat = "pembuat",
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


// memasang sebuah class
$anime_naruto = new action ("naruto","action","25 menit","aiman","8,0","gila banget");
$anime_death = new horror ("Death Note","Psyco","20 menit","aiman","9,0","Siapa Yang Ketakutan!!!!");

// memanggil objeck

// akses visibiity pada public 
echo "<h3> menggunakan public </h3>";
$anime_naruto->judul = "sasuke";
echo $anime_naruto->judul;
echo "<hr>";

// akses visibility pada proted lewat keturunannya
echo "<h3> menggunakan protected </h3>";
$anime_death->setgenre("sadmoment");
echo $anime_death->getgenre();
echo "<hr>";

// akses visibility pada private lewat class
echo "<h3> menggunakan private </h3>";
$anime_naruto->setdurasi("50 menit");
echo $anime_naruto->getdurasi();

?>