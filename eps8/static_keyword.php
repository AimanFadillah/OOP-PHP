<?php 

// menggunakan STATIC KEYWORD

class mangga {
    // property
    public static $jumlah = 1;

    // method
    public function kalimat (){
        return "ada mangga berjumlah " . self::$jumlah++ . "<br>";
    }

}

// membuat objeck
$buah = new mangga();
$buah2 = new mangga();


// memanggil objeck liat lah perbedaannya
echo $buah->kalimat();
echo $buah->kalimat();
echo $buah->kalimat();

echo "<hr>";

echo $buah2->kalimat();
echo $buah2->kalimat();
echo $buah2->kalimat();

?>