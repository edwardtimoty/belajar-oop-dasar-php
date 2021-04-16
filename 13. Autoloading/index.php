<?php 
require 'App/init.php';

// Autoloading
// memanggil class (file) tanpa harus menggunakan require
// 1 class ditulis dalam 1 file

// produk untuk komik
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 100);

// produk untuk game
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 300000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();

?>