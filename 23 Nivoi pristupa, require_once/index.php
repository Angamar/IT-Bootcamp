<html>
<head>
    <link type="text/css"
        rel="stylesheet" href="style.css">
</head>

<body>
<?php echo "<h1>Zadaci sa nasledjivanjem</h1>";


 

$osoba1= new Osoba('Aleksa','Stojanovic', 1995);
$osoba1->ispisiOsobu();
echo "<hr>";

$zaposleni1 = new Zaposleni('Aleksa','Stojanovic', 1995, 5000, 'car');
$zaposleni1->ispisiZaposlenog();
echo "<hr>";


$zaposleni2 = new Zaposleni('Bojana','Brankovic', 1995, 400, 'psiholog');
$zaposleni2->ispisiZaposlenog();
echo "<hr>";



ekonomista($zaposleni2);
$nizRadnika = array($zaposleni1, $zaposleni2);
echo "Prosecna plata: " . prosecnaPlata($nizRadnika);
$prosecnaPlataRadnika = prosecnaPlata($nizRadnika);
if (natprosecnaPlata($zaposleni1, $prosecnaPlataRadnika) == true)
{
    echo "<p>Radnik " . $zaposleni1->getIme() . " ima natprosecnu platu</p>";
}
else
{
    echo "<p>Radnik " . $zaposleni1->getIme() . " nema natprosecnu platu</p>";
}

if (natprosecnaPlata($zaposleni2, $prosecnaPlataRadnika) == true)
{
    echo "<p>Radnik " . $zaposleni2->getIme() . " ima natprosecnu platu</p>";
}
else
{
    echo "<p>Radnik " . $zaposleni2->getIme() . " nema natprosecnu platu</p>";
}


?>

</body>

</html>