<?php

class horror extends anime implements info {
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
        $cetak = $this->infoanime() . "<br> komen : {$this->komen} 😫😫😫";
        return $cetak;
    }
}

?>