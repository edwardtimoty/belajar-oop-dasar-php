<?php 
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


?>