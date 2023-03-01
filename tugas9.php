<?php
//  2 angka awal
$angka_sebelumnya=0;
$angka_sekarang=1;
  
//menampilkan 2 angka awal
echo "$angka_sebelumnya $angka_sekarang";
 
for ($i=0; $i<20; $i++)
{
  // menghitung angka yang akan ditampilkan
  $output = $angka_sekarang + $angka_sebelumnya;
  echo " $output ";
  
  
  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang=$output;
}


  echo"<br>";
  echo"<br>";
  echo"<br>";
  

    for($s=1;$s<=200;$s++){
        $a=0;
        for($l=1;$l<=$s;$l++){
            if($s % $l == 0){
                $a++;
            }
        }
        if($a == 2){
         echo $s.',';
}
}
?>
