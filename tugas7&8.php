<?php 
    for ($s=1; $s <=2 ; $s++) 
        
        echo "<table>";
        echo "<div>";
        echo "<tr>";
        for ($l=1; $l <=10 ; $l++) { 
        echo "<td>";
        for( $a=10;$a>0;$a--){
            for($i=1; $i<=$a; $i++){
                echo "_";
            }
            for($a1=10;$a1>$a;$a1--){
                echo"x";
            }
            for($a2=10;$a2>$a;$a2--){
                echo"x";
            }
            echo"<br>";
        }
        
        for($b=0; $b<=10;$b++){
        for($j=1;$j<=$b;$j++){
        echo"_";
        }
        for($b1=10; $b1>$b;$b1--){
        echo"x";
        }
        for($b2=10; $b2>$b;$b2--){
        echo"x";
        }
        echo"<br>";
        }
        echo "</td>";
    }
        echo "</tr>";
        echo "</div>";
        echo "</table>";



        echo"<br>";
        echo"<br>";
        echo"<br>";




        $angka = [1,2,3,4,5,6,7,8,9,10];
        
        ?>
        <h1>Tabel Bilangan</h1>
        <table border="1">
          <tr>
                 <td>Bilangan</td>
                 <td>Jenis</td>
          </tr>
          <tr>
                <td><?php echo "$angka[0]" ?></td>
                <td>
                  <?php
                  if($angka[0] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
                </td>
          </tr>
          <tr>
                <td><?php echo "$angka[1]" ?></td>
                <td>
                  <?php
                  if($angka[1] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                  ?>
                </td>
          </tr>
          <tr>
                <td><?php echo "$angka[2]" ?></td>
                <td>
                  <?php
                  if($angka[2] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                  ?>
                </td>
          </tr>
          <tr>
         <td><?php echo "$angka[3]" ?></td>
         <td>
                <?php
                if($angka [3] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
         </td>
        </tr>
        <tr>
         <td><?php echo "$angka[4]" ?></td>
         <td>
                <?php
                if($angka[4] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
         </td>
        </tr>
        <tr>
         <td><?php echo "$angka[5]" ?></td>
         <td>
                <?php
                if($angka[5] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
         </td>
        </tr>
        <tr>
         <td><?php echo "$angka[6]" ?></td>
         <td>
                <?php
                if($angka[6] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
         </td>
        </tr>
        <tr>
         <td><?php echo "$angka[7]" ?></td>
         <td>
                <?php
                if($angka[7] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
         </td>
        </tr>
        <tr>
         <td><?php echo "$angka[8]" ?></td>
         <td>
                <?php
                if($angka[8] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
         </td>
        </tr>
        <tr>
         <td><?php echo "$angka[9]" ?></td>
         <td>
                <?php
                if($angka[9] % 2 == 0){
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
         </td>
        </tr>
        </table>


    


    