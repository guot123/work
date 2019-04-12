<?php
for ($i=1; $i < 9; $i++) { 
    for ($j=0; $j < 9; $j++) { 
       for ($x=0; $x <= 9; $x++) { 
           if ($i*$i*$i + $j*$j*$j + $x*$x*$x == 100*$i+10*$j+$c) {
              echo "$i $j $x"."<p>";
           }
       }
    }
}
$sum = 0;
for ($i=1; $i<=100 ; $i++) { 
    $sum += $i;
}
echo $sum;
?>