<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">

<style>
</style>
</head>
<body>

<?php

//1.zadatak

$niz1= array(2.04,1.91,1.99,1.88,1.94,1.99,2.05,2.10);

function prosecnaVisina($niz1)
{   $suma=0;
    foreach ($niz1 as $a)
    {
        $suma+=$a;
    }
    $prosecnaVisina=$suma/count($niz1);
    return $prosecnaVisina;
}

$pv = prosecnaVisina($niz1);
echo "<p> Prosecna visina igraca je $pv.</p>";

//2. zadatak

function natprosecnoVisoki($niz1, $boja1, $boja2)
{
    $prosecnaVisina = prosecnaVisina($niz1);
    foreach ($niz1 as $a)
    {
        if ($a>$prosecnaVisina)
        {
            echo "<p style='color:$boja1'> $a </p>";        
        }
        else
        {
            echo "<p style='color:$boja2'> $a </p>";        
        }
    }
}
natprosecnoVisoki ($niz1, 'green', 'red');

//3.zadatak

$niz2 = array();

for ($i=0; $i<count($niz1)-1; $i++)
{
    $niz2[]=$niz1[0+$i]+$niz1[1+$i];
    echo $niz2[$i] . "; ";
}

//4. zadatak


function trenerVidi ($niz1)
{
    $maxvisina = 0;
    $vidi = 0;
    foreach ($niz1 as $a)
    {
        if($a>$maxvisina)
        {
           $maxvisina=$a;
           $vidi++;
        } 
    }
    return $vidi;
}

$brojKojiVidi = trenerVidi($niz1);
echo "<p>Trener vidi $brojKojiVidi igraca.</p>";



























?>




</body>

</html>