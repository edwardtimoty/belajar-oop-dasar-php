<?php 
// static keyword
// member yang terikat dengan class, bukan dengan object
// nilai static akan selalu tetap meskipun object di instansiasi berulang kali
// membuat kode menjadi 'procedural'
// biasanya digunakan untuk membuat fungsi bantuan (helper)
// digunakan di class-class utility pada framework


// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "halo" . self::$angka++ . "kali" ;
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh 
{
    // public $angka = 1;
    public static $angka = 1;

    public function halo()
    {
        // return "halo" . $this->angka++ . "kali";
        return "halo" . self::$angka++ . "kali <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();







?>