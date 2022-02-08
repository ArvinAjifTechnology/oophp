<?php

//Jualan Produk
// Game
// Komik
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}


$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Drucmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
