<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">

<style>
</style>
</head>
<body>
<?php

//FUNKCIJE
//4. zadatak

function maks2($a,$b)
{
    if ($a>=$b)
    {
        echo $a. "<br>";
        return $a;
    }
    else
    {
        echo $b. "<br>";
        return $b;
    }
}

function maks4($a,$b,$c,$d)
{
    if ($a>=$b and $a>=$c and $a>=$d)
    {
        echo $a. "<br>";
        return $a;
    }
    elseif ($b>=$a and $b>=$c and $b>=$d)
    {
        echo $b. "<br>";
        return $b;
    }
    elseif ($c>=$a and $c>=$b and $c>=$d)
    {
        echo $c. "<br>";
        return $c;
    }
    else
    {
        echo $d. "<br>";
        return $d;
    }
}

maks2(-5,4);
maks4(-12,-2,12,-4);


//TEST
//1. Zadatak 
$suma=0;
$brojbrojeva=0;

$niz= array(1,2,3,4,5,6,7,8,9,10,17,21,32,39,14,56,70);

foreach ($niz as $a)
{
    if ($a%7==0 and $a%2==1)
    {
        $suma+=$a;
        $brojbrojeva+=1;
    }
}
$proizvod = $suma*$brojbrojeva;
echo "<p>Suma svih neparnih brojeva deljivih sa 7 je $suma; <br>
    takvih brojeva ima $brojbrojeva; <br>
    proizvod sume i broja ovih brojeva je $proizvod</p>";

//2.zadatak
function indeksTelesneMase($kg,$cm)
{
    $m=$cm/100;
    $bmi=$kg/($m*$m);
    if ($bmi<=18.5)
    {
        echo "<p>Pothranjenost</p>";
    }
    elseif($bmi>18.5 and $bmi<24.9)
    {
        echo "<p>Normalna tezina</p>";
    }
    elseif($bmi>=24.9 and $bmi<=30)
    {
        echo "<p>Povisena tezina</p>";
    }
    elseif ($bmi>30)
    {
        echo "<p>Gojaznost</p>";
    }
}

indeksTelesneMase (150, 190);

//3. zadatak

function godine($godRodjenja)
{
$trenutnaGod = date('Y');
$brojGod = $trenutnaGod - $godRodjenja;
return $brojGod;
}
$brojGodina = godine(2004);

if ($brojGodina>=18)
{
    echo "<p style='color:blue;'>". $brojGodina . "</p>";
}
else
{
    echo "<p style='color:yellow;'>". $brojGodina . "</p>";
}










?>




</body>

</html>