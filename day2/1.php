<?php
//for循环1-100的和
$sum = 0;
for ($i=0; $i<=100 ; $i++) { 
     $sum += $i;
}
echo $sum;

echo "<br>";
//while循环1-100的和
$a = 1;
$sum1=0;
while ($a <= 100) {
    $sum1 += $a;
    $a++;
}
echo $sum1;

echo "<br>";
//do...while循环1-100的和
$b = 0;
$sum2 = 0;
do {
    $sum2 += $b;
    $b++;
} while ($b <= 100);
echo $sum2;
?>