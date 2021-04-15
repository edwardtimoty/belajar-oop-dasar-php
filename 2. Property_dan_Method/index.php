<?php 
// property
// mempresentasikan data / keadaan dari sebuah object
// variabel yang ada didalam object (member variable)
// sama seperti variable didalam PHP, ditambah dengan visibility didepannya 

// method
// mempresentasikan perilaku dari sebuah object
// function yang ada didalam object
// sama seperti function didalam PHP, ditambah dengan visibility didepannya

class Produk {
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    public $harga = 0;

    public function getJudul() {
        // $this agar function bisa mengambil variabel yang diatas karena kalau tidak pake this itu membuat variabel baru
        return "$this->judul";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// produk untuk komik
$produk3 = new Produk();
// menimpa property yang ada di dalam class Produk
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// produk untuk game
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 300000;

echo "Komik : " . $produk3->getJudul();
echo "<br>";
echo "Game : "  . $produk4->getJudul();


?>