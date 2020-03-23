<html>
<head>
    <link type="text/css" rel ="stylesheet" href="style.css">
<style>
.plava {
    color: blue;
}

.crvena {
    color: red;
}

.zelena {
    color: green;
}

div {
    float: left;
    width:33%;
    text-align: center;
}

div img {
    max-width: 200px;
    max-height: 150px;
}
</style>
</head>
<body>
<?php echo "<h1>Zadaci sa WHILE petljom</h1>";
echo "<p>---------------------------------------------</p>";
//1. ispisuje brojeve od 1 do 20.

$i=1;
while ($i<=20)
{
    echo $i;
    echo "<br>";
    $i++; // = $i+1
}
echo "<p>---------------------------------------------</p>";
//2.Ispisati brojeve od 20 do 1.

$i=20;
while ($i>0)
{
    echo $i;
    echo "<br>";
    $i--;
}
echo "<p>---------------------------------------------</p>";
//3. ispisuje parne brojeve od 1 do 20.

$i=2;
while ($i<=20)
{ 
    echo $i;
    $i=$i+2; //$i+=2;
    echo "<br>";   
}

echo "<p>---------------------------------------------</p>";
//4. Ostatak $a sa $b bez / i %.

$a = 82;
$b = 8;
$kol = 0;
$ost = $a;

while ($ost>=$b)
{
    $ost = $ost - $b;
    $kol++;
}

echo "<p>$a= $kol * $b + $ost</p>";

echo "<p>---------------------------------------------</p>";
//5. Naizmenicno 3 boje boje paragrafe.

$i=1;
while($i<=6)
{
    $text = "Lorem ma nizzle fo shizzle sit dawg, fizzle bling bling crunk. I saw beyonces tizzles and my pizzle went crizzle sapizzle velizzle, pimpin' volutpat, suscipizzle ass, gravida nizzle, arcu. Pellentesque sure tortizzle. Sizzle eros. That's the shizzle izzle black sizzle black da bomb . Maurizzle boom shackalack nibh et turpizzle. Ghetto izzle hizzle. Crunk funky fresh rhoncizzle sizzle. Ghetto black i saw beyonces tizzles and my pizzle went crizzle cool dictumst. Donec dapibizzle. For sure boofron urna, pretizzle dizzle, mattis things, eleifend vitae, stuff. Gangster suscipizzle. Integer dope velit sed bizzle.";
        if ($i%3==1)
        {
            echo "<p class='plava'>$text</p>";
        }
        elseif ($i % 3 == 2)
        {
            echo "<p class='crvena'>$text</p>";
        }
        else 
        {
            echo "<p class='zelena'>$text</p>";
        }
    $i++;
}

echo "<p>---------------------------------------------</p>";
//6. 3 diva (paragraf druga boja + slika)

$i=1;
$pol='m';
while ($i<4)
{
$text = "Lorem ma nizzle fo shizzle sit dawg, fizzle bling bling crunk. I saw beyonces tizzles and my pizzle went crizzle sapizzle velizzle, pimpin' volutpat, suscipizzle ass, gravida nizzle, arcu. Pellentesque sure tortizzle. Sizzle eros. That's the shizzle izzle black sizzle black da bomb . Maurizzle boom shackalack nibh et turpizzle. Ghetto izzle hizzle. Crunk funky fresh rhoncizzle sizzle. Ghetto black i saw beyonces tizzles and my pizzle went crizzle cool dictumst. Donec dapibizzle. For sure boofron urna, pretizzle dizzle, mattis things, eleifend vitae, stuff. Gangster suscipizzle. Integer dope velit sed bizzle.";

    if($i==1)
    {   echo "<div>";
        echo "<img src='images/male.jpg'>";
        echo "<p class='plava'>$text</p>";
        echo "</div>";
    }
    elseif($i==2)
    {
        echo "<div>";
        echo "<img src='images/female.jpg'>";
        echo "<p class='crvena'>$text</p>";
        echo "</div>";
    }
    else
    {
        echo "<div>";
        echo "<img src='images/neutral.jpg'>";
        echo "<p class='zelena'>$text</p>";
        echo "</div>";
    }
$i++;
}

echo "<p>---------------------------------------------</p>";
//6. suma brojeva od 1 do 100.

$i=1;
$suma=0;

while($i<= 100)
{
    $suma = $suma+$i;
    $i++;
}

echo "<p>Suma od 1 do 100 je $suma.</p>";

echo "<p>---------------------------------------------</p>";
//7. suma brojeva od 1 do n.

$i=1;
$n=3;
$suma=0;

while($i <= $n)
{
    $suma = $suma+$i;
    $i++;
}

echo "<p>Suma od 1 do $n je $suma.</p>";

echo "<p>---------------------------------------------</p>";
//8. suma brojeva od m do n.

$m = 8;
$n = 6;

$suma = 0;

if($m<$n)
{
$i = $m;
    while ($i<=$n)
    {
        
        $suma=$suma+$i;
        $i++;
    }
}
elseif($m>$n)
{
$i = $n;
    while ($i<=$m)
    {
        $suma=$suma+$i;
        $i++;
    }
}
else 
{
    echo "Brojevi su isti.";
}
echo "<p>Suma brojeva od $m do $n je $suma.</p>";

echo "<p>---------------------------------------------</p>";
//9. Proizvod brojeva od m do n.

$n = 3;
$m = 6;
$i = $n;
$proizvod = 1;

while($i<=$m)
{
    $proizvod *= $i; //$proizvod = $proizvod*$i;
    $i++;
}
echo "<p>Proizvod brojeva od $n do $m je $proizvod.</p>";

echo "<p>---------------------------------------------</p>";
//10. Proizvod neparnih brojeva od m do n.

$n = 4;
$m = 7;
$i = $n;
$proizvod = 1;

while($i<=$m)
{
    if ($n%2 <> 0)
    {
    $proizvod *= $i; //$proizvod = $proizvod*$i;
    $i++;
    }
    else
    {
    $i++;
    }
}
echo "<p>Kolicnik brojeva od $n do $m je $proizvod</p>";

echo "<p>---------------------------------------------</p>";
//11. Suma kvadrata brojeva od m do n.

$n=4;
$m=7;
$i=$n;
$suma=0;
while($i<=$m)
{
    $suma+=$i*$i;
    $i++;
}

echo "<p>$suma</p>";


?>














</body>

</html>