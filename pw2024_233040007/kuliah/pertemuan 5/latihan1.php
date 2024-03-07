<?php
// 1. Membuat Array
$hari = array('Senin','Selasa','Rabu');

$bulan = ['Januari', 'Februari', 'Maret'];

$mahasiswa = ['Rival', 'Anugrah', 3.1, false];


// 2. Mencetak list Array
  // mencetak 1 nilai pada Array, menggunakan index
     // index dimulai dari 0
echo $hari[1];
echo"<br>";

echo $bulan[2];
echo"<br>";

echo $mahasiswa[2];
echo"<hr>";


// cetak semua isi Array
    // var_dump() atau print_r()
        // digunakan saat debugging
var_dump($hari);
echo"<br>";

print_r($bulan);
echo"<br>";

var_dump($mahasiswa);
echo"<hr>";



// 3. Memanipulasi isi Array
    // menambah isi Array
        // di akhir: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);        

echo"<br>";

array_push($bulan, "April", "Mei");
print_r($bulan);
echo"<br>";


        // di awal: array_unshift()
array_unshift($mahasiswa, "233040007");
print_r($mahasiswa);     
echo"<hr>";


// Menghapus isi array
    // di belakang: array_pop();
        // di depan: array_shhift();
array_pop($hari);
array_shift($bulan);

print_r($hari);
echo"<br>";

print_r($bulan);