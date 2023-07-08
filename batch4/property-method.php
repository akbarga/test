<?php
// property adalah variabel di dalam class
//untuk membuat property sama dengan variabel menggunakan tanda dolar
//tidak boleh diawali dengan angka/ cara membuatnya sama dgn  membuat sebuah variabel
//diawali dengan visibility(public, privite, protected)

class Mpv
{

    public $brand = "Toyota";

    //method =>method adalah fungction yg ada di dalam sebuah clas
    public function showMerk()
    {
        return "merek mobil adalah" . $this->brand;
    }
}

//buat object dari class Mpv
//method adalah fungsi dari sebuah object
$mobil = new Mpv();

//cetak property dari sebuah model
// echo $mobil->brand;

echo "<br>";

// echo $mobil->brand = "honda";

echo $mobil->showMerk();
