<?php

class Produk
{

    public $jenis,
        $merk,
        $stok;

    public function pesanProduk()
    {
        $this->stok = $this->stok - 1;
    }

    public function borongProduk($jumlah)
    {
        $this->stok = $this->stok - $jumlah;
        return $jumlah;
    }
    public function cekStok()
    {
        return "sisa barang:" . $this->stok . "<br>";
    }
}

$produk01 = new Produk();
$produk01->jenis = "mobil";
$produk01->merk = "Wuling";
$produk01->stok = 50;

$produk02 = new Produk();
$produk02->jenis = "Motor";
$produk02->merk = "Yamaha";
$produk02->stok = 15;

echo "stok " . $produk01->jenis . " merk " . $produk01->merk . " stok " . $produk01->stok;
echo "<br>";
echo "stok " . $produk02->jenis . " merk " . $produk02->merk . " stok " . $produk02->stok;
echo "<br>";
echo "PT Suka tani" . $produk01->borongProduk(30);
echo "<br>";
echo $produk01->cekStok();
