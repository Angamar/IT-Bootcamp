<?php 
Echo "<p>1. zadatak -------------------------------------------</p>";
//1. zadatak
$i1=1;
$i2=1;
$proizvod = 1;
$suma = 0;

while ($i1<21) 
{
$proizvod = $proizvod*$i1;
$i1++;
}

while ($i2<31)
{
$suma = $suma+$i2;
$i2++;  
}

$resenje = $proizvod - $suma;
echo "<p>Resenje je $resenje</p>";

Echo "<p>2. zadatak -------------------------------------------</p>";
//2. zadatak
$n = 1;
$m = 3;
$brojac=$n;
$sumakubova=0;

while ($brojac<=$m)
{
    $sumakubova=$sumakubova + $brojac*$brojac*$brojac;
    $brojac++;
}

echo "<p>Suma kubova brojeva od $n do $m je $sumakubova.</p>";


?>


