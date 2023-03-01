<?php

//soal
echo " =========================================";
echo "<br>";
echo " Usia Habib = ? ";
echo "<br>";
echo " Usia Aji = ? ";
echo "<br>";
echo " Usia Bintan = ? ";
echo "<br>";
echo " =========================================";
echo "<br>";

//jawaban

$habib = 21;
$aji = 4;
$usiaajihabib = $aji + $habib;
$bintan = 3; 
$usiabintan = $usiaajihabib + $bintan ;


echo "<br>";
echo "<br>";
echo " Diketahui : ";
echo "<br>";
echo "Habib = $habib tahun";
echo "<br>";
echo "Aji = $aji tahun +  umur Habib";
echo "<br>";
echo "Bintan = $bintan tahun + umur Aji";
echo "<br>";


echo "<br>";
echo " Jawaban : ";
echo "<br>";
echo "Habib = $habib tahun";
echo "<br>";
echo "Aji = $aji tahun +  umur Habib maka Aji = $aji + $habib = ". $usiaajihabib ; 
echo "<br>";
echo "Bintan = $bintan tahun + umur Aji, maka bintan = $bintan + $usiaajihabib =" . " ". "$usiabintan" ; 
echo "<br>";
echo "<br>";
echo "Maka, umur Bintan adalah ". $usiabintan ;


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";





 
//soal
echo " =========================================";
echo "<br>";
echo " Harga Jambu = Rp. 15000/Kg";
echo "<br>";
echo "Harga Kardus = Rp.2000/Kg";
echo "<br>";
echo "Total Penjualan (Dus dan Jambu) = Rp ?";
echo "<br>";
echo " =========================================<br><br>";

//jawaban
$jambu = 15000;
$dus   = 6;
$sisadus = 2;
$isidus = 5;
$dusjambu = $dus * $isidus;
$bekasdus = 2000;
$hargajambu =  $dusjambu + $jambu;
$hargadusjambu = $dusjambu * $jambu;
$hargadus = $sisadus * $bekasdus;
$penjualan = $hargadusjambu + $hargadus;


echo "
Diketahui : <br>

Jambu = $jambu /kg <br>
Didalam toko terdapat $dus dus disetiap $isidus /kg jambu <br>
Bekas tempat jambu dijual dengan harga Rp. $bekasdus /dus <br> <br>

Jawaban : <br>
Harga 30kg Jambu = $dusjambu x $jambu = $hargadusjambu; <br>
Harga bekas tempat jambu (dus) = $sisadus x $bekasdus = $hargadus <br>
Uang hasil penjualan =  $hargadusjambu + $hargadus = $penjualan"; 







?>













?>