<?php 
// visibility
// konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek
// 3 keyword visilbiity : public, private dan protected
// public dapat digunakan dimana saja , bahkan diluar kelas
// protected hanya dapat digunakan didalan sebuah kelas beserta turunannya
// private hanya dapat digunakan dalam sebuah kelas tertentu saja

class Produk 
{
    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

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

    // set judul
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    // get judul
    public function getJudul() 
    {
        // $this agar function bisa mengambil variabel yang diatas karena kalau tidak pake this itu membuat variabel baru
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Produk 
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga); 
        
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        // parent::getInfoProduk() = mengambil function getInfoProduk dari parentnya
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga); 
        
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game :  " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}


class CetakInfoProduk 
{
    // fungsi cetak hanya menerima jenis class Produk lalu projeknya apa
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->penulis}, {$produk->penerbit} (Rp. {$produk->harga})";
        return $str;
    }
}

// produk untuk komik
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 100);

// produk untuk game
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 300000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("Judul Baru");
echo $produk1->getJudul();




?>