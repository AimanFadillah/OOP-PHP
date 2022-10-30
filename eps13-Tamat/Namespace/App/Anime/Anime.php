<?php 

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

?>