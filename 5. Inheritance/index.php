<?php 
// Inheritance
// menciptakan hirarki antar kelas (parent & child)
// Child class = mewarisi semua properti dan method dari parent-nya (yang visible)
// memperluas (extends) fungsionalitas dari parent-nya

class Produk 
{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    // construct = metode khusus yang akan dijalankan secara otomatis setiap kita membuat instansiasi dari sebuah class 
    // kenapa pake __ = karena construct merupakan method spesial yang dimiliki oleh php
    // variabel yang disini adalah variabel lokal beda sm yg di class
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) 
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getJudul() 
    {
        // $this agar function bisa mengambil variabel yang diatas karena kalau tidak pake this itu membuat variabel baru
        return "$this->judul";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";

        if ($this->tipe == "Komik")
        {
            $str .= " - {$this->jmlHalaman}";
        } else if ($this->tipe == "Game")
        {
            $str .= " ~ {$this->waktuMain} Jam";
        }

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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 100, 0, "Komik");

// produk untuk game
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 300000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

// echo "Komik : " . $produk1->getJudul();
// echo "<br>";
// echo "Game : "  . $produk2->getJudul();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);



?>