<?php 
// property
// mempresentasikan data / keadaan dari sebuah object
// variabel yang ada didalam object (member variable)
// sama seperti variable didalam PHP, ditambah dengan visibility didepannya 

// method
// mempresentasikan perilaku dari sebuah object
// function yang ada didalam object
// sama seperti function didalam PHP, ditambah dengan visibility didepannya

class Produk 
{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    // construct = metode khusus yang akan dijalankan secara otomatis setiap kita membuat instansiasi dari sebuah class 
    // kenapa pake __ = karena construct merupakan method spesial yang dimiliki oleh php
    // variabel yang disini adalah variabel lokal beda sm yg di class
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) 
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul() 
    {
        // $this agar function bisa mengambil variabel yang diatas karena kalau tidak pake this itu membuat variabel baru
        return "$this->judul";
    }

}

// produk untuk komik
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000);
// menimpa property yang ada di dalam class Produk
// $produk1->judul = "Naruto";
// $produk1->penulis = "Masashi Kishimoto";
// $produk1->penerbit = "Shonen Jump";
// $produk1->harga = 30000;

// produk untuk game
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 300000);
// $produk2->judul = "Uncharted";
// $produk2->penulis = "Neil Druckman";
// $produk2->penerbit = "Sony Computer";
// $produk2->harga = 300000;

echo "Komik : " . $produk1->getJudul();
echo "<br>";
echo "Game : "  . $produk2->getJudul();


?>