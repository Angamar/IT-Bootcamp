<html>
<head>
    <link type="text/css" rel ="stylesheet" href="style.css">
</head>
<body>
<?php echo "<h1>Zadaci sa IF naredbom</h1>"?>
<?php 
    $vreme = date('A'); //"AM" ili "PM"
    if($vreme == "AM") 
    { 
        echo "<p>Sada je prepodne.</p>"; 
    }
    if($vreme == "PM")
    {
        echo "<p>Sada je popodne.</p>";
    }

//Pozitivan broj 
    $broj =20;
    if($broj < 10)
    {
        echo "<p>Prva desetica</p>";
    }
    elseif($broj <20)
    {
        echo "<p>Druga desetica</p>";
    }
    else
    {
        echo "<p>Veci ili jednaki od dvadeset</p>";
    }
//drugi nacin:
    if($broj >= 20)
    {
        echo "<p>Veci ili jednaki od 20</p>";
    }
    elseif($broj >=10)
    {
        echo "<p>Druga desetica</p>";
    }
    else
    {
        echo "<p>Prva desetica</p>";
    }
    echo "<br>";
    echo "-----------------------------------";
    echo "<br>";

    //7. zadatak

    $osvPoeni = 90;

    if($osvPoeni <= 50)
    {
        echo "Učenik je pao ispit";
    }
    elseif($osvPoeni <= 60)
    {
        echo "Učenik je dobio 6";
    }
    elseif($osvPoeni <= 70)
    {
        echo "Učenik je dobio 7";
    }
    elseif($osvPoeni <= 80)
    {
        echo "Učenik je dobio 8";
    }
    elseif($osvPoeni <= 90)
    {
        echo "Učenik je dobio 9";
    }
    else
    {
        echo "Učenik je dobio 10";
    }


    echo "<br>";
    echo "-----------------------------------";
    echo "<br>";


//8. zadatak: preuzeti dan u nedelji sa racunara i ispitati da li je radni dan ili je vikend

$dan =date('D');
if($dan == "Sat" or $dan =="Sun")
{
    echo "Danas je vikend";
}
elseif ($dan == "Mon")
{
    echo "Danas je ponedeljak, radni dan";
}
elseif ($dan == "Tue")
{
    echo "Danas je utorak, radni dan";
}
elseif ($dan == "Wed")
{
    echo "Danas je sreda, radni dan";
}
elseif ($dan == "Thu")
{
    echo "Danas je četvrtak, radni dan";
}
elseif ($dan == "Fri")
{
    echo "Danas je petak, radni dan";
}
echo "<br>";
echo "-----------------------------------";
echo "<br>";

//8. Dobro jutro/dobar dan/dobro vece zavisno od vremena
date_default_timezone_set('Europe/Belgrade');
$dobaDana = date('G');
echo "$dobaDana h";
echo "<br>";

if($dobaDana < 12)
{
echo "Dobro jutro!";
}
elseif($dobaDana<18)
{
    echo "Dobar dan!";
}
else 
{ 
    echo "Dobro veče!";
}
echo "<br>";
echo "-----------------------------------";
echo "<br>";

//9.zadatak: uporediti dva uneta datuma i ispitati koji je raniji
$d1= 16;
$m1= 10;
$g1= 2019;

$d2= 16;
$m2= 10;
$g2= 2019;

if($g1<$g2)
{
    echo "$d1.$m1.$g1";
}
elseif($g1>$g2)
{
    echo "$d2.$m2.$g2";
}
elseif($m1<$m2)
{
    echo "$d1.$m1.$g1";
}
elseif($m1>$m2)
{
    echo "$d2.$m2.$g2";
}
elseif($d1<$d2)
{
    echo "$d1.$m1.$g1";
}
elseif($d1>$d2)
{
    echo "$d1.$m1.$g1";
}
else 
{
    echo "datumi su isti";
}

echo "<br>";
echo "-----------------------------------";
echo "<br>";
//10. zadatak: Firma radi od 9 do 17 

$sati = 15;
if($sati>9 and $sati<17)
{
    echo "otvoreno";
}
else
{ 
    echo "zatvoreno";
}
?>

 

</body>

</html>