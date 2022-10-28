<?php

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

?>