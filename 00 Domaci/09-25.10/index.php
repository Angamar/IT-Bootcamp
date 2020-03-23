<?php

//1. Zadatak
function digitron($cif1, $cif2, $operacija)
{
    if ($operacija=='+')
    {
        $rezultat = $cif1 + $cif2;
        echo "$cif1 + $cif2 = $rezultat";
    }
    elseif ($operacija=='-')
    {
        $rezultat = $cif1 - $cif2;
        echo "$cif1 - $cif2 = $rezultat";
    }
    elseif ($operacija=='*')
    {
        $rezultat = $cif1 * $cif2;
        echo "$cif1 * $cif2 = $rezultat";
    }
    elseif ($operacija=='/') 
    {
        $rezultat = $cif1 / $cif2;
        echo "$cif1 / $cif2 = $rezultat";
    }
    
}
digitron(7,2,'+');

//2. Zadatak
$niz = array(1,2,3,4,5,6,7,8,9,10);
$brojB = count($niz);
$zbirNB=0;
$brojNB=0;
for ($x=0; $x<$brojB; $x++)
{
    if ($niz[$x]%2==1)
    {
        $zbirNB+=$niz[$x];
        $brojNB++;
    }
}

$srvNB = $zbirNB/$brojNB;
echo "<p>Srednja vrednost neparnih elemenata niza <br> je $srvNB</p>";

?>

