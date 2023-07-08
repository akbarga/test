<?php
//pengertian oop
//sebuah cara penulisan kode program dengan menggunakan object untuk memecahkan masalah

//istilah oop
//1. class
//blue print dalam membuat sebuah object atau cetak biru dalam membuat objcet/design membangun sesuatu
//untuk membuat class syaratnya:
// -diawali dengan keyword class
// -diikuti nama class (namaclass harus diawali huruf kapital)

class Mpv
{
}

//2.object
//Representasi dari class, kita bisa membuat banyak object dari sebuah class

// syaarat untuk membuat sebuah atau banyak object dari sebuah class
// - menggunakan keyword "new" lalu di ikuti nama class + kurung buka tutup
// -disimpan ke dalam sebuah variabel

$object = new Mpv();
$object1 = new Mpv();

//untuk melihat object yg sudah d buat
var_dump($object);
echo "<br>";
var_dump($object1);
