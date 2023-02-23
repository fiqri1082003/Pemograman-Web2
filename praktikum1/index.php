<?php 
// ini sebuah komentar
/* ini juga sebuah komentar */
# ini komentar pake kres
// echo "Hellow Word <br>";
// echo 'Hellow Word <br>';
// print_r("Fiqri <br>");
// var_dump("STT Nurul Fikri");


// Membuat variabel User
$nama= "Fiqri Haikal";
$umur= 18;
$berat= 70.2;
$mahasiswa= true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya $umur <br>";
// echo "Berat badan saya mencapai $berat kg";

// Membuat variabel Sistem
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];

// Membuat variabel Kostanta
define('PHI', 3.14);
$jari = 10;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

// echo "Luas lingkaran jari-jari *jari = $luas <br>";
// echo "Luas lingkaran jari-jari *jari = $keliling";

// Membuat Array
$programs = ["PHP", "Javascript", "HTML", "CSS"];
// echo $programs[0];
// echo "Jumlah data variabel programs sebanyak " . count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}
?>