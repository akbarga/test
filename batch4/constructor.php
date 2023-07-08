<?php

// condtractok metod khusus yg secara otomatis akan d jalankan ketika sebuah object dibuat
// membuat contracktor menggunakan awalan tanda garis bawah 2x lalu di ikuti keyword construct();



class Mobil
{

    public function __construct()
    {
        echo "Contructor on prosess.....<br>";
    }
}
$object01 = new Mobil();
return $object01;
