<?php

//Jualan Produk
// Game
// Komik
class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);
