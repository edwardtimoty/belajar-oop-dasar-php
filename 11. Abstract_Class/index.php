<?php 
// Abstract Class
// sebuah kelas yang tidak dapat di instansiasi
// kelas 'abstrak'
// mendefinisikan interface untuk kelas lain yang menjadi turunannya
// berperan sebagai kerangka dasar untuk kelas turunannya
// minimal memiliki 1 method abstrak
// digunakan dalam inheritance / pewarisan


abstract class Produk 
{
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

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

    abstract public function getInfoProduk();

    public function getInfo()
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
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
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
        $str = "Game :  " . $this->getInfo() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}


class CetakInfoProduk 
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk) 
    {
        $this->daftarProduk[] = $produk;
    }

    // fungsi cetak hanya menerima jenis class Produk lalu projeknya apa
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p) 
        {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

// produk untuk komik
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 100);

// produk untuk game
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 300000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();







?>