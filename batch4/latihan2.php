<?php

class Produk
{

    public $jenis,
        $merk,
        $stok;

    public function __construct($a, $b, $c)
    {
        $this->jenis = $a;
        $this->merk = $b;
        $this->stok = $c;
    }
    public function cetak()
    {
        return "stok " . $this->jenis . " merk " . $this->merk . " stok " . $this->stok;
    }
}

$produk01 = new Produk("mobil", "mobil", "Wuling", 50);
$produk02 = new Produk("Motor", "Yamaha", 15);


echo "stok " . $produk01->jenis . " merk " . $produk01->merk . " stok " . $produk01->stok;
echo "<br>";
echo "stok " . $produk02->jenis . " merk " . $produk02->merk . " stok " . $produk02->stok;

// $object01 = new cetak();
// echo "<br>";
// echo "PT Suka tani" . $produk01->borongProduk(30);
// echo "<br>";
// echo $produk01->cekStok();
