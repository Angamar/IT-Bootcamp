<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>

<?php echo "<h1>10. domaci</h1>";


//1. zadatak

$brojevi = array(1,2,4,5,6,7,8,9,10,10,9,8,4,5,7,10);
$brojmax = $brojevi[0];
$kolbrojmax = 0;

foreach ($brojevi as $a)
{
    if ($a > $brojmax)
    {
        $brojmax = $a;
    }
}

foreach ($brojevi as $a)
{
    if ($a == $brojmax)
    {
        $kolbrojmax++;
    }
} 

echo "<p>Najveci broj u nizu je $brojmax i ponavlja se $kolbrojmax puta.</p>";
echo "<hr>";
//2. zadatak

$niz1 = array(3,1,2,4,5);
$niz2 =array();
$zbirNiz1 = 0;
foreach ($niz1 as $a) 
{
$zbirNiz1 += $a;
}
$srvr = $zbirNiz1/count($niz1);

for ($i=0; $i<count($niz1); $i++)
{
    $apsbr=$niz1[$i]-$srvr;
    if ($apsbr<0)
    {
        $apsbr=$apsbr*(-1);
    }
    $niz2[] = $apsbr;
}

$najblizi = $niz2[0];
$indexbroja= 0;
for ($i=0; $i<count($niz2); $i++)
{
    if ($niz2[$i]<$najblizi)
    {
        $najblizi = $niz2[$i];
        $indexbroja = $i;
    }
}

echo "Srednja vrednost niza je $srvr. <br> Najblizi broj niza ovoj vrednosti je ".$niz1[$indexbroja]. " sa indeksom $indexbroja";
echo "<hr>";
//3. zadatak
$brojevi = array(1,2,4,5,6,6,5,7,10);
function parBnepI($a)
{
$proizvod1=1;
    for ($i=0; $i<count($a); $i++)
    {
        if ($i%2==1 and $a[$i]%2==0)
        {
            $proizvod1*=$a[$i];
        }

    }
return $proizvod1;
}

function nepBparI($a)
{
$proizvod2=1;
    for ($i=0; $i<count($a); $i++)
    {
        if ($i%2==0 and $a[$i]%2==1)
        {
            $proizvod2*=$a[$i];
        }

    }
return $proizvod2;
}

function razlikaProizvoda($a, $b)
{
    $raz = $a - $b;
    echo "<p>Razlika proizvoda parnih brojeva sa neparnim indeksima i neparnih brojeva sa parnim indeksima je $raz.</p>";
}

razlikaProizvoda(nepBparI($brojevi),parBnepI($brojevi));
echo "<hr>";
?>
</body>

</html>