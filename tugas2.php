<?php 

$a = 36; //y
$b = 12; //x
$c = 24;

//Soal
echo "$a Hari = $b Pekerja";
echo "<br>";
echo "b hari = $c Pekerja";
echo "<br>";
echo "b = ...?";
echo "<br>";
echo "<br>";

echo "Jawaban :";
echo "<br>";
echo "<br>";

//Jawaban
echo("$a x $b = n x $c");
echo "<br>";
$z = $a * $b;
echo $z." ". "= $c n";
echo "<br>";
echo "n ="." ". $z ." ". ":" ." ". $c ;
$result = $z / $c;
echo "<br>";
echo "n = " .$result;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$x = 80000;
$y = 50000;

echo "Jual = $x";
echo "<br>";
echo "Beli = $y";
echo "<br>";
echo "Keuntungan = ?";
echo "<br>";
echo "<br>";
echo "Jawaban :";


echo "<br>";
echo " Ditanyakan = Keuntungan Putri dalam persen? ";
echo "<br>";
echo " Keuntungan = [(h.jual -h.beli) / h.beli] x 100% ";
echo "<br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp =";
echo " ($x - $y) / $y x 100%";
echo "<br>";
$kurang = $x - $y;
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp =";
echo "&nbsp$kurang / $y x 100%";
$bagi = $kurang / $y * 100;
echo "<br>"; 
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp =$bagi%";

?>