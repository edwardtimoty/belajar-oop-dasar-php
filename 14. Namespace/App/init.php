<?php 
// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';
// require 'Produk/CetakInfoProduk.php';
// require 'Produk/User.php';

// require 'Service/User.php';


spl_autoload_register(function( $class )
{
    // App\Produk\User  = ["App", "Produk", "User"]
    $class = explode('\\', $class);
    // mengambil User di array
    $class = end($class);
    require 'Produk/' . $class . '.php';
});
spl_autoload_register(function( $class )
{
    // App\Produk\User  = ["App", "Produk", "User"]
    $class = explode('\\', $class);
    // mengambil User di array
    $class = end($class);
    require 'Service/' . $class . '.php';
});
?>